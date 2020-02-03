<?php

        require("class.user2.php");


        print "Running...<br />";

        $strDSN = "pgsql:dbname=postgres;host=localhost;port=5432;user=postgres;
                        password=postgres";
        $objPDO = new PDO($strDSN);
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Usuario por defecto
        $objUser = new User($objPDO);

        $objUser->setFirstName("Steve");
        $objUser->setLastName("Nowicki");
        $objUser->setDateAccountCreated(date("Y-m-d"));

        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        print "ID in database is " . $objUser->getID() . "<br />";


        /////////////////INSERTAR USUARIO/////////////////////


        //Usuario 1
        
        
        /*
        $objUser = new User($objPDO);

        $objUser->setFirstName("Richard");
        $objUser->setLastName("Walls");
        $objUser->setUsername("ricky");
        $objUser->setPassword("P@ssw0rd");
        $objUser->setEmailAddress("ricardopr181999@gmail.com");
        $objUser->setDateLastLogin('05 Dec 2019');
        $objUser->setTimeLastLogin('04:05 AM');
        $objUser->setDateAccountCreated('24 Feb 2000');
        $objUser->setTimeAccountCreated('02:05 PM');

        print "<br>First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        print "ID in database is " . $objUser->getID() . "<br />";*/

        //Usuario 2

        /*
        $objUser = new User($objPDO);

        $objUser->setFirstName("Marc");
        $objUser->setLastName("Navarro");
        $objUser->setUsername("marcus");
        $objUser->setPassword("P@ssw0rd");
        $objUser->setEmailAddress("marcnbdn@gmail.com");
        $objUser->setDateLastLogin('13 Mar 2019');
        $objUser->setTimeLastLogin('04:05 AM');
        $objUser->setDateAccountCreated('02 Nov 2009');
        $objUser->setTimeAccountCreated('04:05 AM');

        print "<br>First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        print "ID in database is " . $objUser->getID() . "<br />";*/


        //Usuario 3

        /*
        $objUser = new User($objPDO);

        $objUser->setFirstName("Andy");
        $objUser->setLastName("Garcia");
        $objUser->setUsername("andybdn");
        $objUser->setPassword("P@ssw0rd");
        $objUser->setEmailAddress("andybdn@gmail.com");
        $objUser->setDateLastLogin('15 Jan 2019');
        $objUser->setTimeLastLogin('04:05 AM');
        $objUser->setDateAccountCreated('15 Jun 2017');
        $objUser->setTimeAccountCreated('04:05 AM');





        print "<br>First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        print "ID in database is " . $objUser->getID() . "<br />";*/



        ///////////////////////////MODIFICAR USUARIO//////////////////////////

        /*$objUser = new User($objPDO, 4);  //Mediante el id modificamos
        $objUser->setFirstName("Toni");

        print "<br>First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

         print "ID in database is " . $objUser->getID() . "<br />";*/




         //////////////////////////ELIMINAR USUARIO///////////////////////////////7

         $objUser = new User($objPDO, 4);
         $objUser->MarkForDeletion();







?>
