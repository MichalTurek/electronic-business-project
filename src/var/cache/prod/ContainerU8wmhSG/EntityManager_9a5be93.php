<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1db2 = null;
    private $initializer544a6 = null;
    private static $publicProperties78cc7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getConnection', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getMetadataFactory', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getExpressionBuilder', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'beginTransaction', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getCache', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getCache();
    }
    public function transactional($func)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'transactional', array('func' => $func), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'commit', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->commit();
    }
    public function rollback()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'rollback', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getClassMetadata', array('className' => $className), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'createQuery', array('dql' => $dql), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'createNamedQuery', array('name' => $name), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'createQueryBuilder', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'flush', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'clear', array('entityName' => $entityName), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->clear($entityName);
    }
    public function close()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'close', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->close();
    }
    public function persist($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'persist', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'remove', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'refresh', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'detach', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'merge', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'contains', array('entity' => $entity), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getEventManager', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getConfiguration', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'isOpen', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getUnitOfWork', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getProxyFactory', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'initializeObject', array('obj' => $obj), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'getFilters', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'isFiltersStateClean', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'hasFilters', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return $this->valueHoldera1db2->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer544a6 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera1db2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1db2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera1db2->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__get', ['name' => $name], $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        if (isset(self::$publicProperties78cc7[$name])) {
            return $this->valueHoldera1db2->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1db2;
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
        $targetObject = $this->valueHoldera1db2;
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
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1db2;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera1db2;
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
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__isset', array('name' => $name), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1db2;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera1db2;
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
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__unset', array('name' => $name), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1db2;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera1db2;
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
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__clone', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        $this->valueHoldera1db2 = clone $this->valueHoldera1db2;
    }
    public function __sleep()
    {
        $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, '__sleep', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
        return array('valueHoldera1db2');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer544a6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer544a6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer544a6 && ($this->initializer544a6->__invoke($valueHoldera1db2, $this, 'initializeProxy', array(), $this->initializer544a6) || 1) && $this->valueHoldera1db2 = $valueHoldera1db2;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1db2;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1db2;
    }
}
