<?php 



function deleteMessage($messageRemove){
    $message = json_decode(file_get_contents('../data/public_chat.json'),true);
    global $online_user;
    foreach ($message as $key => $messages) {
        if ($messages["message"] == $messageRemove) {
            $removedData = $message[$key];
            unset($message[$key]) ;
            $history = json_decode(file_get_contents('../data/history.json'),true);
            $history[] = $removedData;
            file_put_contents('../data/history.json',json_encode($history,JSON_PRETTY_PRINT));
            file_put_contents('../data/public_chat.json',json_encode($message,JSON_PRETTY_PRINT));
            return true;
        }
    }
    return false;
}


function blockByAdmin($blockUser) : bool
{
    $user = json_decode(file_get_contents('../data/usersInfo.json'), true);
    foreach ($user as $key => $users) {
        if ($blockUser == $users['username']) {
                $user[$key]['is_block'] = true;
                file_put_contents('../data/usersInfo.json', json_encode($user, JSON_PRETTY_PRINT));
                return true;
        }
        // return false;
    }
    return false;
}
function unblockByAdmin($unblockUser) : bool
{
    $user = json_decode(file_get_contents('../data/usersInfo.json'), true);
    foreach ($user as $key => $users) {
        if ($unblockUser == $users['username']) {
                $user[$key]['is_block'] = false;
                file_put_contents('../data/usersInfo.json', json_encode($user, JSON_PRETTY_PRINT));
                return true;
        }
        // return false;
    }
    return false;
}
function deleteUser($deleteUser) : bool
{
    $user = json_decode(file_get_contents('../data/usersInfo.json'), true);
    $deletedUser = json_decode(file_get_contents('../data/deletedUsers.json'), true);
    foreach ($user as $key => $users) {
        if ($deleteUser == $users['username']) {
            unset($user[$key]["is_admin"]);
            unset($user[$key]["is_block"]);
            unset($user[$key]["id"]);
            $deletedUser[]  =  $user[$key];
                unset($user[$key]);
                file_put_contents('../data/usersInfo.json', json_encode($user, JSON_PRETTY_PRINT));
                file_put_contents('../data/deletedUsers.json', json_encode($deletedUser, JSON_PRETTY_PRINT));
                return true;
        }
        // return false;
    }
    return false;
}
function makeAdmin($userAdmin) : bool
{
    $user = json_decode(file_get_contents('../data/usersInfo.json'), true);
    foreach ($user as $key => $users) {
        if ($userAdmin == $users['username']) {
                $user[$key]['is_admin'] = true;
                file_put_contents('../data/usersInfo.json', json_encode($user, JSON_PRETTY_PRINT));
                return true;
        }
        // return false;
    }
    return false;
}
function is_admin() : bool{
    $usersInfo = json_decode(file_get_contents('../data/usersInfo.json'),true);
    global $online_user;
    foreach ($usersInfo as $users){
        if (($online_user == $users['username']) && $users['is_admin']){
            return true;
        }
    }
    return false;
}

























?>