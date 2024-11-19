<?php

    namespace App\reservation_Marc;

    use DateTime;
    use PDO;
    use PDOException;
    use App\reservation_Marc\Config\DatabaseConnection;

    class UserManager
    {
        private PDO $connection;

        private array $users = [];

        public function __construct()
        {
            $database = new DatabaseConnection();
            $this->connection = $database->getConnection();
            // $this->connection = DatabaseConnection::getInstance()->getConnection();
        }

        /**
         * Trouve un utilisateur par son ID.
         * @throws \Exception
         */
        public function findById(int $id): ?User
        {
            $query = $this->connection->prepare("SELECT * FROM Users WHERE id = :id");
            $query->execute(['id' => $id]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                throw new \Exception("Utilisateur non trouvé");
            }

            return $this->mapToUser($user);
        }

        /**
         * Liste de Users
         * @throws \Exception
         * @return array
         */
        public function findAll() : array {
            $users = [];

            // $stmt = $pdo->prepare('SELECT * FROM contacts ORDER BY id LIMIT :current_page, :record_per_page');
            // $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
            // $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
            // $stmt->execute();
            // // Fetch the records so we can display them in our template.
            // $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            try {
                // Exécuter une requête de sélection simple
                $query = $this->connection->query('SELECT * FROM Users');
        
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($results as $row) {
                    $users[] = $this->mapToUser($row);
                }
        
                // var_dump($users);
        
            } catch (PDOException $e) {
                echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            }

            return $users;
        }

        /**
         * Create a User
         * @throws \Exception
         * @param [type] $user
         * @return string
         */
        public function create($user) : mixed {
            try {

                $query = $this->connection->prepare('INSERT INTO Users (first_name, last_name, photo, user_role, phone, email, password, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $query->execute([
                $user->getFirstName(), 
                $user->getLastName(), 
                ($user->getPhoto() != '')? $user->getPhoto():null, 
                $user->getUserRole(), 
                $user->getPhone(), 
                $user->getEmail(),
                $user->getPassword(), 
                $user->getStatus(), 
                $user->getCreatedAt()->format("Y-m-d H:i:s"), 
                $user->getUpdatedAt()->format("Y-m-d H:i:s")
            ]);
            } catch (\Throwable $e) {
                echo "Erreur lors de l'exécution de la requête de création : " . $e->getMessage();
            }
         
            $publisher_id = $this->connection->lastInsertId();

            echo 'The publisher id ' . $publisher_id . ' was inserted';
            
            var_dump($query);

            return $query;
        }

        // private int $id;
        // private string $first_name;
        // private string $last_name;
        // private string|null $photo;
        // private string $user_role; // ENUM('member', 'user', 'admin')
        // private string|null $phone;
        // private string $email;
        // private string $password;
        // private string $status; // ENUM('active', 'inactive')
        // private ?DateTime $created_at;
        // private ?DateTime $updated_at;

        public function update($id,$user){
            // $stmt = $pdo->prepare('UPDATE contacts SET id = ?, name = ?, email = ?, phone = ?, title = ?, created = ? WHERE id = ?');
            // $stmt->execute([$id, $name, $email, $phone, $title, $created, $_GET['id']]);
            $query = $this->connection->prepare('UPDATE Users SET id = ?, name = ?, email = ?, phone = ?, title = ?, created = ? WHERE id = ?');
        }

        public function delete($id){
            
        }

        

        /**
         * Map un tableau associatif en un objet User.
         *
         * @throws \Exception
         */
        private function mapToUser(array $user): User
        {
            return new User(
                $user['id'],
                $user['first_name'],
                $user['last_name'],
                $user['photo'],
                $user['user_role'],
                $user['phone'],
                $user['email'],
                $user['password'],
                $user['status'],
                new DateTime($user['created_at']),
                new DateTime($user['updated_at'])
            );
        }
    }