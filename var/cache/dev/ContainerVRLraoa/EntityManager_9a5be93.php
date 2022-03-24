<?php

namespace ContainerVRLraoa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7840d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer836de = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties39299 = [
        
    ];

    public function getConnection()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getConnection', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getMetadataFactory', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getExpressionBuilder', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'beginTransaction', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getCache', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'transactional', array('func' => $func), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'commit', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->commit();
    }

    public function rollback()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'rollback', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getClassMetadata', array('className' => $className), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'createQuery', array('dql' => $dql), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'createNamedQuery', array('name' => $name), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'createQueryBuilder', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'flush', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'clear', array('entityName' => $entityName), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->clear($entityName);
    }

    public function close()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'close', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->close();
    }

    public function persist($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'persist', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'remove', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'refresh', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'detach', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'merge', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'contains', array('entity' => $entity), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getEventManager', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getConfiguration', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'isOpen', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getUnitOfWork', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getProxyFactory', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'initializeObject', array('obj' => $obj), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'getFilters', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'isFiltersStateClean', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'hasFilters', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return $this->valueHolder7840d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer836de = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7840d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7840d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7840d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__get', ['name' => $name], $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        if (isset(self::$publicProperties39299[$name])) {
            return $this->valueHolder7840d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7840d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7840d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7840d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7840d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__isset', array('name' => $name), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7840d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7840d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__unset', array('name' => $name), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7840d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7840d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__clone', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        $this->valueHolder7840d = clone $this->valueHolder7840d;
    }

    public function __sleep()
    {
        $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, '__sleep', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;

        return array('valueHolder7840d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer836de = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer836de;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer836de && ($this->initializer836de->__invoke($valueHolder7840d, $this, 'initializeProxy', array(), $this->initializer836de) || 1) && $this->valueHolder7840d = $valueHolder7840d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7840d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7840d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
