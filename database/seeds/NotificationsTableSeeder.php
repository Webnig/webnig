<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i <= 20; $i++) {
            $notif = new \App\Notification();
            if ($i >= 2 && $i <= 6){
                $type = \App\Notification::$PROFILE_VIEW;
            } elseif ($i > 6 && $i <= 8) {
                $type = \App\Notification::$INTEREST_ACCEPTED;
            }
            elseif ($i > 8 && $i <= 11) {
                $type = \App\Notification::$INTEREST_SENT;
            }elseif ($i > 11 && $i <= 14) {
                $type = \App\Notification::$NEW_MATCHES;
            }elseif ($i > 14 && $i <= 18) {
                $type = \App\Notification::$ADMIRED_BY;
            }else{
                $type = \App\Notification::$ADMIRES;
                
            }

            $notif->user_id = 1;
            $notif->source_id = $i;
            $notif->type = $type;
            $notif->description = 'default description';
            $notif->save();
        }
    }
}
