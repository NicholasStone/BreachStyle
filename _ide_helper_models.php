<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\History{
/**
 * Class History
 * package App
 *
 * @property-read \App\Models\Access\User\User $user
 * @property-read \App\Models\History\HistoryType $type
 */
	class History extends \Eloquent {}
}

namespace App\Models\History{
/**
 * Class HistoryType
 * package App
 *
 */
	class HistoryType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Province
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\University[] $universities
 */
	class Province extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\University
 *
 * @property-read \App\Models\Province $province
 */
	class University extends \Eloquent {}
}

namespace App\Model\Settings{
/**
 * App\Model\Settings\Setting
 *
 */
	class Setting extends \Eloquent {}
}

namespace App\Model\Settings{
/**
 * App\Model\Settings\Slider
 *
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Application
 *
 * @property-read \App\Models\Access\User\User $user
 * @property-read \App\Models\Branch $branch
 */
	class Application extends \Eloquent {}
}

namespace App\Models\Access\Permission{
/**
 * Class Permission
 *
 * @package App\Models\Access\Permission
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Access\User{
/**
 * Class SocialLogin
 *
 * @package App\Models\Access\User
 */
	class SocialLogin extends \Eloquent {}
}

namespace App\Models\Access\User{
/**
 * Class User
 *
 * @package App\Models\Access\User
 * @property-read \App\Models\Branch $branch
 * @property-read mixed $branch_type
 * @property-read mixed $confirmed_label
 * @property-read mixed $picture
 * @property-read mixed $edit_button
 * @property-read mixed $change_password_button
 * @property-read mixed $status_button
 * @property-read mixed $confirmed_button
 * @property-read mixed $delete_button
 * @property-read mixed $restore_button
 * @property-read mixed $delete_permanently_button
 * @property-read mixed $login_as_button
 * @property-read mixed $action_buttons
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\SocialLogin[] $providers
 */
	class User extends \Eloquent {}
}

namespace App\Models\Access\Role{
/**
 * Class Role
 *
 * @package App\Models\Access\Role
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\Permission[] $permissions
 */
	class Role extends \Eloquent {}
}

