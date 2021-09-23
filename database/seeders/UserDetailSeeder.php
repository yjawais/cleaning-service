<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDetail;
class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new UserDetail;
        $user1->user_id = "1";
        $user1->date_of_birth= "1-1-2000";
        $user1->gender = "male";
        $user1->folder_name = "user1";
        $user1->referral_code = "Ram123";
        $user1->wallet_amount = "0";
        $user1->created_at = "2021-01-01 10:10:11";
        $user1->updated_at = "2021-01-02 11:12:11";
        $user1->deleted_at = "2021-01-03 11:13:11";     
        $user1->created_by = "1";
        $user1->updated_by = "1";
        $user1->save();

        $user2 = new UserDetail;
        $user2->user_id = "2";
        $user2->date_of_birth= "2-2-2000";
        $user2->gender = "female";
        $user2->folder_name = "user2";
        $user2->referral_code = "shy123";
        $user2->wallet_amount = "0";
        $user2->created_at = "2021-02-01 10:10:21";
        $user2->updated_at = "2021-02-02 11:12:21";
        $user2->deleted_at = "2021-02-03 11:13:21";     
        $user2->created_by = "2";
        $user2->updated_by = "2";
        $user2->save();
    
        $user3 = new UserDetail;
        $user3->user_id = "3";
        $user3->date_of_birth= "3-3-2000";
        $user3->gender = "male";
        $user3->folder_name = "user3";
        $user3->referral_code = "Sit123";
        $user3->wallet_amount = "0";
        $user3->created_at = "2021-01-01 10:10:31";
        $user3->updated_at = "2021-01-02 11:12:31";
        $user3->deleted_at = "2021-01-03 11:13:31";     
        $user3->created_by = "3";
        $user3->updated_by = "3";
        $user3->save();

        $user4 = new UserDetail;
        $user4->user_id = "4";
        $user4->date_of_birth= "4-4-2000";
        $user4->gender = "female";
        $user4->folder_name = "user4";
        $user4->referral_code = "git123";
        $user4->wallet_amount = "09";
        $user4->created_at = "2021-01-01 10:10:41";
        $user4->updated_at = "2021-01-02 11:12:41";
        $user4->deleted_at = "2021-01-03 11:13:41";     
        $user4->created_by = "4";
        $user4->updated_by = "4";
        $user4->save();

        $user5 = new UserDetail;
        $user5->user_id = "5";
        $user5->date_of_birth= "5-5-2000";
        $user5->gender = "female";
        $user5->folder_name = "user5";
        $user5->referral_code = "Tho123";
        $user5->wallet_amount = "0";
        $user5->created_at = "2021-01-01 10:10:51";
        $user5->updated_at = "2021-01-02 11:12:51";
        $user5->deleted_at = "2021-01-03 11:13:51";     
        $user5->created_by = "5";
        $user5->updated_by = "5";
        $user5->save();

        $user6 = new UserDetail;
        $user6->user_id = "6";
        $user6->date_of_birth= "6-6-2000";
        $user6->gender = "male";
        $user6->folder_name = "user6";
        $user6->referral_code = "Aal123";
        $user6->wallet_amount = "0";
        $user6->created_at = "2021-01-06 10:10:11";
        $user6->updated_at = "2021-01-02 11:12:11";
        $user6->deleted_at = "2021-01-03 11:13:11";     
        $user6->created_by = "6";
        $user6->updated_by = "6";
        $user6->save();

        $user7 = new UserDetail;
        $user7->user_id ="7";
        $user7->date_of_birth= "7-7-2000";
        $user7->gender = "male";
        $user7->folder_name = "user7";
        $user7->referral_code = "oli123";
        $user7->wallet_amount = "0";
        $user7->created_at = "2021-07-01 10:10:11";
        $user7->updated_at = "2021-07-02 11:12:11";
        $user7->deleted_at = "2021-07-03 11:13:11";     
        $user7->created_by = "7";
        $user7->updated_by = "7";
        $user7->save();

        $user8 = new UserDetail;
        $user8->user_id = "8";
        $user8->date_of_birth= "8-8-2000";
        $user8->gender = "female";
        $user8->folder_name = "user8";
        $user8->referral_code = "Peg123";
        $user8->wallet_amount = "0";
        $user8->created_at = "2021-08-01 10:10:11";
        $user8->updated_at = "2021-08-02 11:12:11";
        $user8->deleted_at = "2021-08-03 11:13:11";     
        $user8->created_by = "8";
        $user8->updated_by = "8";
        $user8->save();

        $user9 = new UserDetail;
        $user9->user_id = "9";
        $user9->date_of_birth= "9-9-2000";
        $user9->gender = "male";
        $user9->folder_name = "user9";
        $user9->referral_code = "jas123";
        $user9->wallet_amount = "0";
        $user9->created_at = "2021-09-01 10:10:11";
        $user9->updated_at = "2021-09-02 11:12:11";
        $user9->deleted_at = "2021-09-03 11:13:11";     
        $user9->created_by = "9";
        $user9->updated_by = "9";
        $user9->save();

        $user10 = new UserDetail;
        $user10->user_id ="10";
        $user10->date_of_birth= "10-10-2000";
        $user10->gender = "female";
        $user10->folder_name = "user10";
        $user10->referral_code = "Luc123";
        $user10->wallet_amount = "0";
        $user10->created_at = "2021-10-01 10:10:11";
        $user10->updated_at = "2021-10-02 11:12:11";
        $user10->deleted_at = "2021-10-03 11:13:11";     
        $user10->created_by = "10";
        $user10->updated_by = "10";
        $user10->save();
    }
}
