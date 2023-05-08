<?php //6beb54b7fc1b4b8bcb5bacc0e1594dad
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Book;
    use App\Models\Fine;
    use App\Models\LentBook;
    use App\Models\Message;
    use App\Models\ReservedBook;
    use App\Models\Role;
    use App\Models\Subscription;
    use App\Models\SubscriptionPlan;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role as Role1;

    /**
     * @method Book|null getOrPut($key, $value)
     * @method Book|$this shift(int $count = 1)
     * @method Book|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Book|$this pop(int $count = 1)
     * @method Book|null pull($key, $default = null)
     * @method Book|null last(callable $callback = null, $default = null)
     * @method Book|$this random($number = null)
     * @method Book|null sole($key = null, $operator = null, $value = null)
     * @method Book|null get($key, $default = null)
     * @method Book|null first(callable $callback = null, $default = null)
     * @method Book|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Book|null find($key, $default = null)
     * @method Book[] all()
     */
    class _IH_Book_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Book[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Book_QB whereId($value)
     * @method _IH_Book_QB whereTitle($value)
     * @method _IH_Book_QB whereCover($value)
     * @method _IH_Book_QB whereIsbnNumber($value)
     * @method _IH_Book_QB whereAuthor($value)
     * @method _IH_Book_QB whereGenre($value)
     * @method _IH_Book_QB whereCreatedAt($value)
     * @method _IH_Book_QB whereUpdatedAt($value)
     * @method _IH_Book_QB whereSummary($value)
     * @method _IH_Book_QB whereAvailable($value)
     * @method _IH_Book_QB wherePages($value)
     * @method _IH_Book_QB whereRating($value)
     * @method _IH_Book_QB whereReadTime($value)
     * @method Book baseSole(array|string $columns = ['*'])
     * @method Book create(array $attributes = [])
     * @method _IH_Book_C|Book[] cursor()
     * @method Book|null|_IH_Book_C|Book[] find($id, array|string $columns = ['*'])
     * @method _IH_Book_C|Book[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Book|_IH_Book_C|Book[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Book|_IH_Book_C|Book[] findOrFail($id, array|string $columns = ['*'])
     * @method Book|_IH_Book_C|Book[] findOrNew($id, array|string $columns = ['*'])
     * @method Book first(array|string $columns = ['*'])
     * @method Book firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Book firstOrCreate(array $attributes = [], array $values = [])
     * @method Book firstOrFail(array|string $columns = ['*'])
     * @method Book firstOrNew(array $attributes = [], array $values = [])
     * @method Book firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Book forceCreate(array $attributes)
     * @method _IH_Book_C|Book[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Book_C|Book[] get(array|string $columns = ['*'])
     * @method Book getModel()
     * @method Book[] getModels(array|string $columns = ['*'])
     * @method _IH_Book_C|Book[] hydrate(array $items)
     * @method Book make(array $attributes = [])
     * @method Book newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Book[]|_IH_Book_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Book[]|_IH_Book_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Book sole(array|string $columns = ['*'])
     * @method Book updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Book_QB extends _BaseBuilder {}

    /**
     * @method Fine|null getOrPut($key, $value)
     * @method Fine|$this shift(int $count = 1)
     * @method Fine|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Fine|$this pop(int $count = 1)
     * @method Fine|null pull($key, $default = null)
     * @method Fine|null last(callable $callback = null, $default = null)
     * @method Fine|$this random($number = null)
     * @method Fine|null sole($key = null, $operator = null, $value = null)
     * @method Fine|null get($key, $default = null)
     * @method Fine|null first(callable $callback = null, $default = null)
     * @method Fine|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Fine|null find($key, $default = null)
     * @method Fine[] all()
     */
    class _IH_Fine_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Fine[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Fine_QB whereId($value)
     * @method _IH_Fine_QB whereUserId($value)
     * @method _IH_Fine_QB whereBookId($value)
     * @method _IH_Fine_QB whereFineAmount($value)
     * @method _IH_Fine_QB whereDaysLate($value)
     * @method _IH_Fine_QB whereCreatedAt($value)
     * @method _IH_Fine_QB whereUpdatedAt($value)
     * @method Fine baseSole(array|string $columns = ['*'])
     * @method Fine create(array $attributes = [])
     * @method _IH_Fine_C|Fine[] cursor()
     * @method Fine|null|_IH_Fine_C|Fine[] find($id, array|string $columns = ['*'])
     * @method _IH_Fine_C|Fine[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Fine|_IH_Fine_C|Fine[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Fine|_IH_Fine_C|Fine[] findOrFail($id, array|string $columns = ['*'])
     * @method Fine|_IH_Fine_C|Fine[] findOrNew($id, array|string $columns = ['*'])
     * @method Fine first(array|string $columns = ['*'])
     * @method Fine firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Fine firstOrCreate(array $attributes = [], array $values = [])
     * @method Fine firstOrFail(array|string $columns = ['*'])
     * @method Fine firstOrNew(array $attributes = [], array $values = [])
     * @method Fine firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Fine forceCreate(array $attributes)
     * @method _IH_Fine_C|Fine[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Fine_C|Fine[] get(array|string $columns = ['*'])
     * @method Fine getModel()
     * @method Fine[] getModels(array|string $columns = ['*'])
     * @method _IH_Fine_C|Fine[] hydrate(array $items)
     * @method Fine make(array $attributes = [])
     * @method Fine newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Fine[]|_IH_Fine_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Fine[]|_IH_Fine_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Fine sole(array|string $columns = ['*'])
     * @method Fine updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Fine_QB extends _BaseBuilder {}

    /**
     * @method LentBook|null getOrPut($key, $value)
     * @method LentBook|$this shift(int $count = 1)
     * @method LentBook|null firstOrFail($key = null, $operator = null, $value = null)
     * @method LentBook|$this pop(int $count = 1)
     * @method LentBook|null pull($key, $default = null)
     * @method LentBook|null last(callable $callback = null, $default = null)
     * @method LentBook|$this random($number = null)
     * @method LentBook|null sole($key = null, $operator = null, $value = null)
     * @method LentBook|null get($key, $default = null)
     * @method LentBook|null first(callable $callback = null, $default = null)
     * @method LentBook|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method LentBook|null find($key, $default = null)
     * @method LentBook[] all()
     */
    class _IH_LentBook_C extends _BaseCollection {
        /**
         * @param int $size
         * @return LentBook[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_LentBook_QB whereId($value)
     * @method _IH_LentBook_QB whereUserId($value)
     * @method _IH_LentBook_QB whereBookId($value)
     * @method _IH_LentBook_QB whereLentDate($value)
     * @method _IH_LentBook_QB whereExpireDate($value)
     * @method LentBook baseSole(array|string $columns = ['*'])
     * @method LentBook create(array $attributes = [])
     * @method _IH_LentBook_C|LentBook[] cursor()
     * @method LentBook|null|_IH_LentBook_C|LentBook[] find($id, array|string $columns = ['*'])
     * @method _IH_LentBook_C|LentBook[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method LentBook|_IH_LentBook_C|LentBook[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LentBook|_IH_LentBook_C|LentBook[] findOrFail($id, array|string $columns = ['*'])
     * @method LentBook|_IH_LentBook_C|LentBook[] findOrNew($id, array|string $columns = ['*'])
     * @method LentBook first(array|string $columns = ['*'])
     * @method LentBook firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LentBook firstOrCreate(array $attributes = [], array $values = [])
     * @method LentBook firstOrFail(array|string $columns = ['*'])
     * @method LentBook firstOrNew(array $attributes = [], array $values = [])
     * @method LentBook firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LentBook forceCreate(array $attributes)
     * @method _IH_LentBook_C|LentBook[] fromQuery(string $query, array $bindings = [])
     * @method _IH_LentBook_C|LentBook[] get(array|string $columns = ['*'])
     * @method LentBook getModel()
     * @method LentBook[] getModels(array|string $columns = ['*'])
     * @method _IH_LentBook_C|LentBook[] hydrate(array $items)
     * @method LentBook make(array $attributes = [])
     * @method LentBook newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LentBook[]|_IH_LentBook_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LentBook[]|_IH_LentBook_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LentBook sole(array|string $columns = ['*'])
     * @method LentBook updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_LentBook_QB extends _BaseBuilder {}

    /**
     * @method Message|null getOrPut($key, $value)
     * @method Message|$this shift(int $count = 1)
     * @method Message|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Message|$this pop(int $count = 1)
     * @method Message|null pull($key, $default = null)
     * @method Message|null last(callable $callback = null, $default = null)
     * @method Message|$this random($number = null)
     * @method Message|null sole($key = null, $operator = null, $value = null)
     * @method Message|null get($key, $default = null)
     * @method Message|null first(callable $callback = null, $default = null)
     * @method Message|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Message|null find($key, $default = null)
     * @method Message[] all()
     */
    class _IH_Message_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Message[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Message_QB whereId($value)
     * @method _IH_Message_QB whereUserId($value)
     * @method _IH_Message_QB whereEmail($value)
     * @method _IH_Message_QB whereTitle($value)
     * @method _IH_Message_QB whereMessage($value)
     * @method Message baseSole(array|string $columns = ['*'])
     * @method Message create(array $attributes = [])
     * @method _IH_Message_C|Message[] cursor()
     * @method Message|null|_IH_Message_C|Message[] find($id, array|string $columns = ['*'])
     * @method _IH_Message_C|Message[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Message|_IH_Message_C|Message[] findOrFail($id, array|string $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOrNew($id, array|string $columns = ['*'])
     * @method Message first(array|string $columns = ['*'])
     * @method Message firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Message firstOrCreate(array $attributes = [], array $values = [])
     * @method Message firstOrFail(array|string $columns = ['*'])
     * @method Message firstOrNew(array $attributes = [], array $values = [])
     * @method Message firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Message forceCreate(array $attributes)
     * @method _IH_Message_C|Message[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Message_C|Message[] get(array|string $columns = ['*'])
     * @method Message getModel()
     * @method Message[] getModels(array|string $columns = ['*'])
     * @method _IH_Message_C|Message[] hydrate(array $items)
     * @method Message make(array $attributes = [])
     * @method Message newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Message[]|_IH_Message_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Message[]|_IH_Message_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Message sole(array|string $columns = ['*'])
     * @method Message updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Message_QB extends _BaseBuilder {}

    /**
     * @method ReservedBook|null getOrPut($key, $value)
     * @method ReservedBook|$this shift(int $count = 1)
     * @method ReservedBook|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ReservedBook|$this pop(int $count = 1)
     * @method ReservedBook|null pull($key, $default = null)
     * @method ReservedBook|null last(callable $callback = null, $default = null)
     * @method ReservedBook|$this random($number = null)
     * @method ReservedBook|null sole($key = null, $operator = null, $value = null)
     * @method ReservedBook|null get($key, $default = null)
     * @method ReservedBook|null first(callable $callback = null, $default = null)
     * @method ReservedBook|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReservedBook|null find($key, $default = null)
     * @method ReservedBook[] all()
     */
    class _IH_ReservedBook_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReservedBook[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ReservedBook_QB whereId($value)
     * @method _IH_ReservedBook_QB whereUserId($value)
     * @method _IH_ReservedBook_QB whereBookId($value)
     * @method _IH_ReservedBook_QB whereReservedDate($value)
     * @method _IH_ReservedBook_QB whereExpireDate($value)
     * @method ReservedBook baseSole(array|string $columns = ['*'])
     * @method ReservedBook create(array $attributes = [])
     * @method _IH_ReservedBook_C|ReservedBook[] cursor()
     * @method ReservedBook|null|_IH_ReservedBook_C|ReservedBook[] find($id, array|string $columns = ['*'])
     * @method _IH_ReservedBook_C|ReservedBook[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReservedBook|_IH_ReservedBook_C|ReservedBook[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReservedBook|_IH_ReservedBook_C|ReservedBook[] findOrFail($id, array|string $columns = ['*'])
     * @method ReservedBook|_IH_ReservedBook_C|ReservedBook[] findOrNew($id, array|string $columns = ['*'])
     * @method ReservedBook first(array|string $columns = ['*'])
     * @method ReservedBook firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReservedBook firstOrCreate(array $attributes = [], array $values = [])
     * @method ReservedBook firstOrFail(array|string $columns = ['*'])
     * @method ReservedBook firstOrNew(array $attributes = [], array $values = [])
     * @method ReservedBook firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReservedBook forceCreate(array $attributes)
     * @method _IH_ReservedBook_C|ReservedBook[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReservedBook_C|ReservedBook[] get(array|string $columns = ['*'])
     * @method ReservedBook getModel()
     * @method ReservedBook[] getModels(array|string $columns = ['*'])
     * @method _IH_ReservedBook_C|ReservedBook[] hydrate(array $items)
     * @method ReservedBook make(array $attributes = [])
     * @method ReservedBook newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReservedBook[]|_IH_ReservedBook_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ReservedBook[]|_IH_ReservedBook_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReservedBook sole(array|string $columns = ['*'])
     * @method ReservedBook updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReservedBook_QB extends _BaseBuilder {}

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random($number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereTeamId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereGuardName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method SubscriptionPlan|null getOrPut($key, $value)
     * @method SubscriptionPlan|$this shift(int $count = 1)
     * @method SubscriptionPlan|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SubscriptionPlan|$this pop(int $count = 1)
     * @method SubscriptionPlan|null pull($key, $default = null)
     * @method SubscriptionPlan|null last(callable $callback = null, $default = null)
     * @method SubscriptionPlan|$this random($number = null)
     * @method SubscriptionPlan|null sole($key = null, $operator = null, $value = null)
     * @method SubscriptionPlan|null get($key, $default = null)
     * @method SubscriptionPlan|null first(callable $callback = null, $default = null)
     * @method SubscriptionPlan|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SubscriptionPlan|null find($key, $default = null)
     * @method SubscriptionPlan[] all()
     */
    class _IH_SubscriptionPlan_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubscriptionPlan[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SubscriptionPlan baseSole(array|string $columns = ['*'])
     * @method SubscriptionPlan create(array $attributes = [])
     * @method _IH_SubscriptionPlan_C|SubscriptionPlan[] cursor()
     * @method SubscriptionPlan|null|_IH_SubscriptionPlan_C|SubscriptionPlan[] find($id, array|string $columns = ['*'])
     * @method _IH_SubscriptionPlan_C|SubscriptionPlan[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SubscriptionPlan|_IH_SubscriptionPlan_C|SubscriptionPlan[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscriptionPlan|_IH_SubscriptionPlan_C|SubscriptionPlan[] findOrFail($id, array|string $columns = ['*'])
     * @method SubscriptionPlan|_IH_SubscriptionPlan_C|SubscriptionPlan[] findOrNew($id, array|string $columns = ['*'])
     * @method SubscriptionPlan first(array|string $columns = ['*'])
     * @method SubscriptionPlan firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscriptionPlan firstOrCreate(array $attributes = [], array $values = [])
     * @method SubscriptionPlan firstOrFail(array|string $columns = ['*'])
     * @method SubscriptionPlan firstOrNew(array $attributes = [], array $values = [])
     * @method SubscriptionPlan firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubscriptionPlan forceCreate(array $attributes)
     * @method _IH_SubscriptionPlan_C|SubscriptionPlan[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubscriptionPlan_C|SubscriptionPlan[] get(array|string $columns = ['*'])
     * @method SubscriptionPlan getModel()
     * @method SubscriptionPlan[] getModels(array|string $columns = ['*'])
     * @method _IH_SubscriptionPlan_C|SubscriptionPlan[] hydrate(array $items)
     * @method SubscriptionPlan make(array $attributes = [])
     * @method SubscriptionPlan newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubscriptionPlan[]|_IH_SubscriptionPlan_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SubscriptionPlan[]|_IH_SubscriptionPlan_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscriptionPlan sole(array|string $columns = ['*'])
     * @method SubscriptionPlan updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubscriptionPlan_QB extends _BaseBuilder {}

    /**
     * @method Subscription|null getOrPut($key, $value)
     * @method Subscription|$this shift(int $count = 1)
     * @method Subscription|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Subscription|$this pop(int $count = 1)
     * @method Subscription|null pull($key, $default = null)
     * @method Subscription|null last(callable $callback = null, $default = null)
     * @method Subscription|$this random($number = null)
     * @method Subscription|null sole($key = null, $operator = null, $value = null)
     * @method Subscription|null get($key, $default = null)
     * @method Subscription|null first(callable $callback = null, $default = null)
     * @method Subscription|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Subscription|null find($key, $default = null)
     * @method Subscription[] all()
     */
    class _IH_Subscription_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Subscription[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Subscription_QB whereId($value)
     * @method _IH_Subscription_QB whereName($value)
     * @method _IH_Subscription_QB wherePrice($value)
     * @method _IH_Subscription_QB whereMaxBooks($value)
     * @method _IH_Subscription_QB whereUserId($value)
     * @method _IH_Subscription_QB whereSubscriptionsPlansId($value)
     * @method _IH_Subscription_QB whereStartDate($value)
     * @method _IH_Subscription_QB whereEndDate($value)
     * @method Subscription baseSole(array|string $columns = ['*'])
     * @method Subscription create(array $attributes = [])
     * @method _IH_Subscription_C|Subscription[] cursor()
     * @method Subscription|null|_IH_Subscription_C|Subscription[] find($id, array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrFail($id, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrNew($id, array|string $columns = ['*'])
     * @method Subscription first(array|string $columns = ['*'])
     * @method Subscription firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription firstOrCreate(array $attributes = [], array $values = [])
     * @method Subscription firstOrFail(array|string $columns = ['*'])
     * @method Subscription firstOrNew(array $attributes = [], array $values = [])
     * @method Subscription firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Subscription forceCreate(array $attributes)
     * @method _IH_Subscription_C|Subscription[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Subscription_C|Subscription[] get(array|string $columns = ['*'])
     * @method Subscription getModel()
     * @method Subscription[] getModels(array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] hydrate(array $items)
     * @method Subscription make(array $attributes = [])
     * @method Subscription newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Subscription[]|_IH_Subscription_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Subscription[]|_IH_Subscription_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscription sole(array|string $columns = ['*'])
     * @method Subscription updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Subscription_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random($number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereSubscription($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB permission(array|Collection|int|Permission|string $permissions)
     * @method _IH_User_QB role(array|Collection|int|Role1|string $roles, string $guard = null)
     */
    class _IH_User_QB extends _BaseBuilder {}
}
