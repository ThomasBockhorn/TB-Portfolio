<?php //f95e5c68017ad19ff8624b496866b726
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Project;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Project|null getOrPut($key, $value)
     * @method Project|$this shift(int $count = 1)
     * @method Project|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Project|$this pop(int $count = 1)
     * @method Project|null pull($key, $default = null)
     * @method Project|null last(callable $callback = null, $default = null)
     * @method Project|$this random($number = null)
     * @method Project|null sole($key = null, $operator = null, $value = null)
     * @method Project|null get($key, $default = null)
     * @method Project|null first(callable $callback = null, $default = null)
     * @method Project|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Project|null find($key, $default = null)
     * @method Project[] all()
     */
    class _IH_Project_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Project[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Project_QB whereId($value)
     * @method _IH_Project_QB whereProjectName($value)
     * @method _IH_Project_QB whereProjectDescription($value)
     * @method _IH_Project_QB whereProjectUrl($value)
     * @method _IH_Project_QB whereProjectImageFile($value)
     * @method _IH_Project_QB whereCreatedAt($value)
     * @method _IH_Project_QB whereUpdatedAt($value)
     * @method Project baseSole(array|string $columns = ['*'])
     * @method Project create(array $attributes = [])
     * @method _IH_Project_C|Project[] cursor()
     * @method Project|null|_IH_Project_C|Project[] find($id, array|string $columns = ['*'])
     * @method _IH_Project_C|Project[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Project|_IH_Project_C|Project[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Project|_IH_Project_C|Project[] findOrFail($id, array|string $columns = ['*'])
     * @method Project|_IH_Project_C|Project[] findOrNew($id, array|string $columns = ['*'])
     * @method Project first(array|string $columns = ['*'])
     * @method Project firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Project firstOrCreate(array $attributes = [], array $values = [])
     * @method Project firstOrFail(array|string $columns = ['*'])
     * @method Project firstOrNew(array $attributes = [], array $values = [])
     * @method Project firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Project forceCreate(array $attributes)
     * @method _IH_Project_C|Project[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Project_C|Project[] get(array|string $columns = ['*'])
     * @method Project getModel()
     * @method Project[] getModels(array|string $columns = ['*'])
     * @method _IH_Project_C|Project[] hydrate(array $items)
     * @method Project make(array $attributes = [])
     * @method Project newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Project[]|_IH_Project_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Project[]|_IH_Project_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Project sole(array|string $columns = ['*'])
     * @method Project updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Project_QB extends _BaseBuilder {}
    
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
     */
    class _IH_User_QB extends _BaseBuilder {}
}