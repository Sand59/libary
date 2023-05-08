<?php //1353c24e1ed43ec6df532cfa2d6e26d4
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_Book_C;
    use LaravelIdea\Helper\App\Models\_IH_Book_QB;
    use LaravelIdea\Helper\App\Models\_IH_Fine_C;
    use LaravelIdea\Helper\App\Models\_IH_Fine_QB;
    use LaravelIdea\Helper\App\Models\_IH_LentBook_C;
    use LaravelIdea\Helper\App\Models\_IH_LentBook_QB;
    use LaravelIdea\Helper\App\Models\_IH_Message_C;
    use LaravelIdea\Helper\App\Models\_IH_Message_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReservedBook_C;
    use LaravelIdea\Helper\App\Models\_IH_ReservedBook_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscriptionPlan_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscriptionPlan_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_C;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C as _IH_Role_C1;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB as _IH_Role_QB1;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role as Role1;

    /**
     * @property int $id
     * @property string $title
     * @property string $cover
     * @property string $isbn_number
     * @property string $author
     * @property string $genre
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $summary
     * @property int $available
     * @property int $pages
     * @property string $rating
     * @property int $read_time
     * @property _IH_LentBook_C|LentBook[] $lentbooks
     * @property-read int $lentbooks_count
     * @method HasMany|_IH_LentBook_QB lentbooks()
     * @property _IH_ReservedBook_C|ReservedBook[] $reservedbooks
     * @property-read int $reservedbooks_count
     * @method HasMany|_IH_ReservedBook_QB reservedbooks()
     * @method static _IH_Book_QB onWriteConnection()
     * @method _IH_Book_QB newQuery()
     * @method static _IH_Book_QB on(null|string $connection = null)
     * @method static _IH_Book_QB query()
     * @method static _IH_Book_QB with(array|string $relations)
     * @method _IH_Book_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Book_C|Book[] all()
     * @foreignLinks id,\App\Models\ReservedBook,book_id|id,\App\Models\LentBook,book_id|id,\App\Models\Fine,book_id
     * @mixin _IH_Book_QB
     */
    class Book extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $book_id
     * @property float $fine_amount
     * @property int $days_late
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Fine_QB onWriteConnection()
     * @method _IH_Fine_QB newQuery()
     * @method static _IH_Fine_QB on(null|string $connection = null)
     * @method static _IH_Fine_QB query()
     * @method static _IH_Fine_QB with(array|string $relations)
     * @method _IH_Fine_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Fine_C|Fine[] all()
     * @ownLinks user_id,\App\Models\User,id|book_id,\App\Models\Book,id
     * @mixin _IH_Fine_QB
     */
    class Fine extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $book_id
     * @property Carbon $lent_date
     * @property Carbon $expire_date
     * @property Book $book
     * @method BelongsTo|_IH_Book_QB book()
     * @method static _IH_LentBook_QB onWriteConnection()
     * @method _IH_LentBook_QB newQuery()
     * @method static _IH_LentBook_QB on(null|string $connection = null)
     * @method static _IH_LentBook_QB query()
     * @method static _IH_LentBook_QB with(array|string $relations)
     * @method _IH_LentBook_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_LentBook_C|LentBook[] all()
     * @ownLinks user_id,\App\Models\User,id|book_id,\App\Models\Book,id
     * @mixin _IH_LentBook_QB
     */
    class LentBook extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $email
     * @property string $title
     * @property string $message
     * @property Carbon $date
     * @method static _IH_Message_QB onWriteConnection()
     * @method _IH_Message_QB newQuery()
     * @method static _IH_Message_QB on(null|string $connection = null)
     * @method static _IH_Message_QB query()
     * @method static _IH_Message_QB with(array|string $relations)
     * @method _IH_Message_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Message_C|Message[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Message_QB
     */
    class Message extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $book_id
     * @property Carbon $reserved_date
     * @property Carbon $expire_date
     * @property Book $book
     * @method BelongsTo|_IH_Book_QB book()
     * @method static _IH_ReservedBook_QB onWriteConnection()
     * @method _IH_ReservedBook_QB newQuery()
     * @method static _IH_ReservedBook_QB on(null|string $connection = null)
     * @method static _IH_ReservedBook_QB query()
     * @method static _IH_ReservedBook_QB with(array|string $relations)
     * @method _IH_ReservedBook_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReservedBook_C|ReservedBook[] all()
     * @ownLinks user_id,\App\Models\User,id|book_id,\App\Models\Book,id
     * @mixin _IH_ReservedBook_QB
     */
    class ReservedBook extends Model {}

    /**
     * @property int $id
     * @property int|null $team_id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property float $price
     * @property int $max_books
     * @property int $user_id
     * @property int $subscriptions_plans_id
     * @property Carbon $start_date
     * @property Carbon $end_date
     * @property SubscriptionPlan $subscriptionPlan
     * @method BelongsTo|_IH_SubscriptionPlan_QB subscriptionPlan()
     * @method static _IH_Subscription_QB onWriteConnection()
     * @method _IH_Subscription_QB newQuery()
     * @method static _IH_Subscription_QB on(null|string $connection = null)
     * @method static _IH_Subscription_QB query()
     * @method static _IH_Subscription_QB with(array|string $relations)
     * @method _IH_Subscription_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscription_C|Subscription[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Subscription_QB
     */
    class Subscription extends Model {}

    /**
     * @method static _IH_SubscriptionPlan_QB onWriteConnection()
     * @method _IH_SubscriptionPlan_QB newQuery()
     * @method static _IH_SubscriptionPlan_QB on(null|string $connection = null)
     * @method static _IH_SubscriptionPlan_QB query()
     * @method static _IH_SubscriptionPlan_QB with(array|string $relations)
     * @method _IH_SubscriptionPlan_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubscriptionPlan_C|SubscriptionPlan[] all()
     * @mixin _IH_SubscriptionPlan_QB
     */
    class SubscriptionPlan extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string $subscription
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C1|Role1[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB1 roles()
     * @method HasOne|_IH_Subscription_QB subscription()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\ReservedBook,user_id|id,\App\Models\LentBook,user_id|id,\App\Models\Subscription,user_id|id,\App\Models\Fine,user_id|id,\App\Models\Message,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
