<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MoodleService
{
    public function createUser($user, $plainPassword)
    {
        // 3️⃣ Crear usuario en Moodle
        $url = config('moodle.url') . '/webservice/rest/server.php';
        $token = config('moodle.token');

        $params = [
            'wstoken' => $token,
            'wsfunction' => 'core_user_create_users',
            'moodlewsrestformat' => 'json',
            'users' => [
                [
                    'username' => $user->email,
                    'firstname' => $user->nombre,
                    'lastname' => $user->apellido,
                    'email' => $user->email,
                    'auth' => 'manual',
                    'password' => $plainPassword,
                ]
            ]
        ];

        $response = Http::asForm()->post($url, $params);
        $result = $response->json();

        if (isset($result['exception'])) {
            throw new \Exception($result['message']);
        }

        return $result;
    }

    public function assignStudentRole($userId)
    {
        $url = config('moodle.url') . '/webservice/rest/server.php';
        $token = config('moodle.token');

        $params = [
            'wstoken' => $token,
            'wsfunction' => 'core_role_assign_roles',
            'moodlewsrestformat' => 'json',
            'assignments' => [
                [
                    'roleid' => 5,
                    'userid' => $userId,
                    'contextid' => 1,
                ]
            ]
        ];

        $response = Http::asForm()->post($url, $params);
        return $response->json();
    }
}
