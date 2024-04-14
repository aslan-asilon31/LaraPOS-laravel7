<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'coupon_code'	=> 'SUMMER10',
            'name'	=> 'Summer Sale',
            'description'	=> 'Get 10% off entire purchase',
            'expired'	=> '2024-09-01', 
            'status'	=> 1, 
            'discount'	=> 10, 
        ]);
        Coupon::create([
            'coupon_code'	=> 'WELCOME15',
            'name'	=> 'Welcome Discount',
            'description'	=> 'Enjoy 15% off first order',
            'status'	=> 1, 
            'discount'	=> 15, 
        ]);
        Coupon::create([
            'coupon_code'	=> 'FREESHIP',
            'name'	=> 'Free Shipping',
            'description'	=> 'Free shipping over Rp 100k',
            'status'	=> 1, 
            'discount'	=> 100, 
        ]);
        Coupon::create([
            'coupon_code'	=> 'SPRING20',
            'name'	=> 'Spring Sale',
            'description'	=> 'Free shipping over Rp 100k',
            'status'	=> 1, 
            'discount'	=> 20, 
        ]);
    }
}
