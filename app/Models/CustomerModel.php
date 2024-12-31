<?php
namespace App\Models;
use CodeIgniter\Model;
class CustomerModel extends Model
{
	protected $table = 'customers';
	protected $allowedFields = ['name', 'email', 'country_code', 'phone_number', 'password'];
}