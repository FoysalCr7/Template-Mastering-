<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function siteInformation()
    {
        return view('admin.setting.site-information');
    }
    public function sellerRate()
    {
        return view('admin.setting.seller-rate');
    }
    public function orderStatus()
    {
        return view('admin.setting.order-status');
    }
    public function Offer()
    {
        return view('admin.setting.offer');
    }
    public function paymentSetting()
    {
        return view('admin.setting.payment-setting');
    }
    public function externalCode()
    {
        return view('admin.setting.external-code');
    }
    public function settingLog()
    {
        return view('admin.setting.setting-log');
    }
}
