<?php

namespace app\models;

use PDO;

class Admin
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    //add info
    public function getAllAddInfo()
    {
        $stmt = $this->pdo->query("SELECT * FROM additional_informations ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneAddInfo($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM additional_informations WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function updateAddInfo($data)
    {
        $stmt = $this->pdo->prepare("UPDATE additional_informations  SET title = :title WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
        ]);
    }

    public function newAddInfo($title)
    {
        $stmt = $this->pdo->prepare("INSERT INTO additional_informations (title) VALUE (:title)");
        $stmt->execute([
            'title' => $title,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteAddInfo($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM additional_informations WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updateCoachServices($data)
    {
        $stmt = $this->pdo->prepare("UPDATE additional_informations  SET title = :title WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title']
        ]);
    }


    //application service
    public function getAllApplicationService()
    {
        $stmt = $this->pdo->query("SELECT * FROM application_service ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneApplicationService($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM application_service WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newApplicationService($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO application_service (name,email,id_services,phone,id_gym) VALUE (:name,:email,:id_services,:phone,:id_gym)");
        $stmt->execute([
            'name' => $data['name'],
            'id_gym'=>$data['id_gym'],
            'email' => $data['email'],
            'id_services' => $data['id_services'],
            'phone' => $data['phone']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteApplicationService($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM application_service WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }


    //application ticket
    public function getAllApplicationTickets()
    {
        $stmt = $this->pdo->query("SELECT * FROM application_ticket ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneApplicationTicket($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM application_ticket WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newApplicationTicket($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO application_ticket (name,email,id_ticket,phone,id_gym) VALUE (:name,:email,:id_ticket,:phone,:id_gym)");
        $stmt->execute([
            'name' => $data['name'],
            'id_gym'=>$data['id_gym'],
            'email' => $data['email'],
            'id_ticket' => $data['id_ticket'],
            'phone' => $data['phone']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteApplicationTicket($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM application_ticket WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }


    //coach services
    public function getAllCoachServices()
    {
        $stmt = $this->pdo->query("SELECT * FROM coach_servises ORDER BY id");
        return $stmt->fetchAll();
    }

    public function filterCoaches($id_gym)
    {
        $stmt = $this->pdo->prepare("select coaches.*, gyms.address, posts.title
                    from coaches 
                    inner join gyms on coaches.id_gym=gyms.id
                    inner join posts on coaches.id_post=posts.id
                    where coaches.id_gym = :id_gym");

        $stmt->execute([
            'id_gym' => $id_gym
        ]);

        $temp = $stmt->fetchAll();
        return json_encode($temp, JSON_UNESCAPED_UNICODE);
    }

    public function getOneCoachService($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM coach_servises WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newCoachService($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO coach_servises (id_coach,id_servers) VALUE (:id_coach,:id_coach)");
        $stmt->execute([
            'id_coach' => $data['id_coach'],
            'id_servers' => $data['id_servers']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function updateCoachService($data)
    {
        $stmt = $this->pdo->prepare("UPDATE coach_servises  SET id_coach = :id_coach,id_servers= :id_servers WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'id_coach' => $data['id_coach'],
            'id_servers' => $data['id_servers']
        ]);
    }


    //coaches
    public function getAllCoaches()
    {
        $stmt = $this->pdo->query("SELECT * FROM coaches ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getAllCoachesGym($id_gym)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM coaches WHERE id_gym=:id_gym");
        $stmt->execute([
            'id_gym' => $id_gym
        ]);
        return $stmt->fetchAll();
    }

    public function getOneCoach($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM coaches WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newCoach($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO coaches (id_post,name,photo,id_gym,add_info) VALUE (:id_post,:name,:photo,:id_gym,:add_info)");
        $stmt->execute([
            'id_post' => $data['id_post'],
            'name' => $data['name'],
            'photo' => $data['photo'],
            'id_gym' => $data['id_gym'],
            'add_info' => $data['add_info'],
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteCoach($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM coaches WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updateCoach($data)
    {
        $stmt = $this->pdo->prepare("UPDATE coaches  SET id_post = :id_post,name= :name,photo=:photo,id_gym=:id_gym,add_info=:add_info WHERE id=:id");
        $stmt->execute([
            'id'=>$data['id'],
            'id_post' => $data['id_post'],
            'name' => $data['name'],
            'photo' => $data['photo'],
            'id_gym' => $data['id_gym'],
            'add_info' => $data['add_info']
        ]);
    }



    //gyms
    public function getAllGyms()
    {
        $stmt = $this->pdo->query("SELECT * FROM gyms ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneGym($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM gyms WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newGym($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO gym (address,phone,add_info) VALUE (:address,:phone,:add_info)");
        $stmt->execute([
            'address' => $data['address'],
            'phone' => $data['phone'],
            'add_info' => $data['add_info'],
        ]);

        return $this->pdo->lastInsertId();
    }

    public function updateGym($data)
    {
        $stmt = $this->pdo->prepare("UPDATE gym  SET address = :address,phone = :phone,add_info = :add_info, WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'add_info' => $data['add_info'],
        ]);
    }


    //inventory
    public function getAllInventory()
    {
        $stmt = $this->pdo->query("SELECT * FROM inventory ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneInventory($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM inventory WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newInventory($title)
    {
        $stmt = $this->pdo->prepare("INSERT INTO inventory (title) VALUE (:title)");
        $stmt->execute([
            'title' => $title,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function updateInventory($data)
    {
        $stmt = $this->pdo->prepare("UPDATE inventory  SET title = :title WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
        ]);
    }

    public function deleteInventory($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM inventory WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }


    //inventory gyms

    public function getAllInventoryGym($id_gym)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM inventory_gyms WHERE id_gym=:id_gym ORDER BY id");
        $stmt->execute([
            'id_gym' => $id_gym,
        ]);
        return $stmt->fetchAll();
    }

    public function getOneInventoryGym($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM inventory_gyms WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
        return $stmt->fetch();
    }

    public function newInventoryGym($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO inventory_gyms (id_gym,id_inventory,quantity) VALUE (:id_gym,:id_inventory,:quantity)");
        $stmt->execute([
            'id_gym' => $data['id_gym'],
            'id_inventory' => $data['id_inventory'],
            'quantity' => $data['quantity'],
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteInventoryGym($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM inventory_gyms WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updateInventoryGym($data)
    {
        $stmt = $this->pdo->prepare("UPDATE inventory_gyms  SET id_inventory = :id_inventory,id_gym=:id_gym,quantity=:quantity WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'id_gym' => $data['id_gym'],
            'quantity'=>$data['quantity'],
            'id_inventory'=>$data['id_inventory']
        ]);
    }


    //photos gyms
    public function getAllPhotosGym($id_gym)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM photos_gyms WHERE id_gym=:id_gym");
        $stmt->execute([
            'id_gym' => $id_gym
        ]);
        return $stmt->fetchAll();
    }

    public function getOnePhotoGym($id_gym)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM photos_gyms WHERE id_gym=:id_gym");
        $stmt->execute([
            'id_gym' => $id_gym
        ]);
        return $stmt->fetch();
    }

    public function getOnePhoto($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM photos_gyms WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newPhotoGym($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO photos_gyms (photo,id_gym) VALUE (:photo,:id_gym)");
        $stmt->execute([
            'photo' => $data['photo'],
            'id_gym' => $data['id_gym'],
        ]);

        return $this->pdo->lastInsertId();
    }
    public function deletePhotoGym($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM  photos_gyms WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updatePhoto($data)
    {
        $stmt = $this->pdo->prepare("UPDATE photos_gyms  SET photo = :photo,id_gym=:id_gym WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'photo' => $data['photo'],
            'id_gym' => $data['id_gym'],
        ]);
    }


    //posts
    public function getAllPosts()
    {
        $stmt = $this->pdo->query("SELECT * FROM posts ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newPost($title)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts (title) VALUE (:title)");
        $stmt->execute([
            'title' => $title,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare("UPDATE posts  SET title = :title WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
        ]);
    }


    //services
    public function getAllServices()
    {
        $stmt = $this->pdo->query("SELECT * FROM services ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneService($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM services WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newService($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO services (title,pluses,description,price) VALUE (:title,:pluses,:description,:price)");
        $stmt->execute([
            'title' => $data['title'],
            'pluses' => $data['pluses'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteService($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM services WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }
    public function updateService($data)
    {
        $stmt = $this->pdo->prepare("UPDATE services  SET title = :title, pluses=:pluses, description=:description, price=:price WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
            'pluses' => $data['pluses'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);
    }


    //season tickets
    public function getAllTicket()
    {
        $stmt = $this->pdo->query("SELECT * FROM season_tickets ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getOneTicket($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM season_tickets WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function newTicket($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO season_tickets (title,pluses,description,price) VALUE (:title,:pluses,:description,:price)");
        $stmt->execute([
            'title' => $data['title'],
            'pluses' => $data['pluses'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteTicket($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM season_tickets WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

    public function updateTicket($data)
    {
        $stmt = $this->pdo->prepare("UPDATE season_tickets  SET title = :title, pluses=:pluses, description=:description, price=:price WHERE id=:id");
        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
            'pluses' => $data['pluses'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);
    }
}