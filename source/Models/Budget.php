<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Core\View;
use Source\Support\Email;

/**
 * Class Jobs
 * @package Source\Models
 */
class Budget extends Model
{
    /**
     * Post constructor.
     */
    public function __construct()
    {
        parent::__construct("budget", ["id"], ["juridic", "first_name", "email", "telephone", "phone", "state", "city", "address", "zipcode", "company", "items", "msg"]);
    }

        /**
     * @param string $juridic
     * @param string $firstName
     * @param string $email
     *  @param string $telephone
     * @param string $phone
     *  @param string $state
     *  @param string $city
     *  @param string $address
     *  @param string $zipcode
     *  @param string $company
     * @param string $items
     * @param string|null $msg
     * @return Budget
     */
    public function bootstrap(
        string $juridic,
        string $firstName,
        string $email,
        string $telephone,
        string $phone,
        string $state,
        string $city,
        string $address,
        string $zipcode,
        string $company,
        string $items,
        string $msg = null
    ): Budget {
         $this->juridic = $juridic;
        $this->first_name = $firstName;
        $this->email = $email;
         $this->telephone = $telephone;
        $this->phone = $phone;
         $this->state = $state;
          $this->city = $city;
           $this->address = $address;
            $this->zipcode = $zipcode;
             $this->company = $company;
        $this->items = $items;
        $this->msg = $msg;
        return $this;
    }


 /**
     * @param Budget $contacts
     * @return bool
     */
    public function register(Budget $contacts): bool
    {
        

        $view = new View(__DIR__ . "/../../shared/views/email/");
        $message = $view->render("mail", [
             "juridic" => $contacts->juridic,
            "first_name" => $contacts->first_name,
            "email" => $contacts->email,
             "telephone" => $contacts->telephone,
              "phone" => $contacts->phone,
               "state" => $contacts->state,
                "city" => $contacts->city,
                 "address" => $contacts->address,
                  "zipcode" => $contacts->zipcode,
             "company" => $contacts->company,
              "items" => $contacts->items,
               "msg" => $contacts->msg
        ]);

        (new Email())->bootstrap(
            "Orçamento - " . CONF_SITE_NAME,
            $message,
            $contacts->email,
            "{$contacts->first_name} "
        )->send();

        return true;
    }


    /**
     * @return bool
     */
    public function save(): bool
    {
        return parent::save();
    }
}