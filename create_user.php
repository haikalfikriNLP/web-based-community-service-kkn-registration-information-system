<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

// Define new user data
$name = 'New Admin';
$username = 'newadmin';
$password = 'password123';
$level = 'admin';

// Create new user
$user = User::create([
    'name' => $name,
    'username' => $username,
    'password' => Hash::make($password),
    'level' => $level,
]);

echo "User created successfully: Username = $username, Password = $password\n";

$kernel->terminate($input, $status);
