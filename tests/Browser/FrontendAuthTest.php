<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontendAuthTest extends DuskTestCase
{
    public function testVisitLoginPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')->assertSee('Login')->screenshot('login_page'); 
        });
    }
    
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/login')
                ->type('email', 'admin@gmail.com')
                ->type('password', 'admin')  
                ->press('Login')  
                ->assertPathIs('/profile')  
                ->assertSee('welcome to profile')
                ->screenshot('login_test_ok');

        });
    }

    public function testVisitProfilePage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/profile')->assertSee('profile')->screenshot('profile_page');
        });     
    }

    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/profile')
                ->screenshot('profile_page_logout_button_present')
                ->clickLink('logout')
                ->assertPathIs('/')
                ->screenshot('logout_success');;
        });     
    }

    public function testVisitRegisterPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')->assertSee('Register')->screenshot('register_page');;
        });   
    }

    public function testRegister(): void
    {
        $this->browse(function (Browser $browser){
           $browser->visit('/login')
               ->screenshot('login_page_working')
               ->clickLink('Don\'t have an account? Sign up')
               ->assertPathIs('/register')
                ->type('name', 'krishna')
                ->radio('gender', 'male')
                ->type('email', 'krishna@gmail.com')
                ->type('password', 'krishna')
                ->type('confirmPassword', 'krishna')
                ->type('phone', '9487342961')  
                ->type('address', 'abcd')  
                ->type('pincode', '607302')
                // Select an option from the dropdown
                ->select('country', 'us')
                ->type('captcha', '123')
                // Assert the values are selected (optional)
                // ->assertChecked('gender', 'male')
                ->assertSelected('country', 'us')
                ->press('Register')  
                ->screenshot('register_success');
        });
    }
    
    
    
    public function testVisitForgetPasswordPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/forget_password')->assertSee('Forget')->screenshot('forget_password_page');;
        });
    }


    public function testVisitRolePage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/role')->assertSee('Role')->screenshot('role_page'); 
        });
    }

    public function testVisitCategoryPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/category')->assertSee('Categories')->screenshot('category_page'); 
        });
    }

    public function testVisitOrderPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/order')->assertSee('order')->screenshot('order_page'); 
        });
    }
    public function testVisitCartPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cart')->assertSee('Cart')->screenshot('cart_page'); 
        });
    }
}
