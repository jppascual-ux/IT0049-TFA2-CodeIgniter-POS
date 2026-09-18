<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    /**
     * Customer Accounts page.
     * Records are retrieved from the `customers` table through CustomerModel
     * (Query Builder) instead of the static array used in TFA1.
     */
    public function index(): string
    {
        $customerModel = new CustomerModel();

        $data['title']     = 'Customer Accounts';
        $data['customers'] = $customerModel->orderBy('id', 'ASC')->findAll();

        return view('customers/index', $data);
    }
}
