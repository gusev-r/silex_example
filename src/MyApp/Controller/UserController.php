<?php
namespace MyApp\Controller;

class UserController{

    public function index(){
        // show the list of users
	return 'UserController:index';
    }

    public function edit($id){
        // show edit form
    }

    public function show($id){
        // show the user #id
    }

    public function store(){
        // create a new user, using POST method
    }
    
    public function update($id){
        // update the user #id, using PUT method
    }

    public function destroy($id){
        // delete the user #id, using DELETE method
    }
}
