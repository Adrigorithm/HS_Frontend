<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Config\Services;
use CodeIgniter\Encryption\EncrypterInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'User';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowCallbacks = true;
    protected $returnType = User::class;
    protected $beforeInsert = ['encryptAndHash'];
    protected $afterFind = ['decrypt'];
    protected EncrypterInterface $encrypter;

    public function __construct(EncrypterInterface $encrypter)
    {
        parent::__construct();

        $this->encrypter = $encrypter;
    }

    protected $allowedFields = [
        'username',
        'email',
        'password',
        'is_admin'
    ];

    private function encryptAndHash(array $data): array
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = $this->hash($data['data']['password']);

        if (isset($data['data']['username']))
            $data['data']['username'] = $this->encrypt($data['data']['username']);

        if (isset($data['data']['email']))
            $data['data']['email'] = $this->encrypt($data['data']['email']);

        return $data;
    }

    private function hash(string $data): string {
        return password_hash($data, PASSWORD_DEFAULT);
    }

    private function encrypt(string $data): string {
        return $this->encrypter->encrypt($data);
    }

    private function decrypt(string $data): string {
        return $this->encrypter->decrypt($data);
    }
}