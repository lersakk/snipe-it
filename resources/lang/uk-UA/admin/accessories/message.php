<?php

return array(

    'does_not_exist' => 'The accessory [:id] does not exist.',
    'not_found' => 'That accessory was not found.',
    'assoc_users'	 => 'This accessory currently has :count items checked out to users. Please check in the accessories and and try again. ',

    'create' => array(
        'error'   => 'The accessory was not created, please try again.',
        'success' => 'Аксесуар успішно створено.'
    ),

    'update' => array(
        'error'   => 'The accessory was not updated, please try again',
        'success' => 'The accessory was updated successfully.'
    ),

    'delete' => array(
        'confirm'   => 'Are you sure you wish to delete this accessory?',
        'error'   => 'There was an issue deleting the accessory. Please try again.',
        'success' => 'Аксесуар успішно видалено.'
    ),

     'checkout' => array(
        'error'   		=> 'Accessory was not checked out, please try again',
        'success' 		=> 'Аксесуар успішно видано.',
        'unavailable'   => 'Accessory is not available for checkout. Check quantity available',
        'user_does_not_exist' => 'Невірний користувач. Спробуйте ще раз.'
    ),

    'checkin' => array(
        'error'   		=> 'Accessory was not checked in, please try again',
        'success' 		=> 'Accessory checked in successfully.',
        'user_does_not_exist' => 'Вказаного користувача не існує. Спробуйте ще раз.'
    )


);
