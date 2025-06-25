<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];
        $result = [];
        foreach ($users as $user) {
            // 仮配列に既存の要素を格納
            $arr = [];
            foreach ($user as $key => $value) {
                $arr[$key] = $value;
            }

            // 苗字の作成
            $fullname = $user['last_name'] . $user['first_name'];
            $arr['full_name'] = $fullname;

            // ageが存在しない場合、作成
            if (empty($arr['age'])) {
                $arr['age'] = null;
            }

            // パスワードの削除
            unset($arr['password']);
            // 要素をすべて追加
            $result[] = $arr;
        }
        return $result;
    }
}
