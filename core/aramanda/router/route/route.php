<?php
namespace Aramanda\Router\Route;

//use Aramanda\Router\Route\Implement\Route as _interface;
use Aramanda\Router\DataParser\RouteParser;

 /**
 * class of of individial route
 *
 * @package route
 */
class Route //implements _interface
{
	/**
	* Route name if it is related to named route index.
	*
	* @since 1.0
	* @var string
	*/
  public $name;

	/**
	* The request method the route is to listen to.
	*
	* @since 1.0
	* @var string
	*/
  public $httpMethod = [];

	/**
	* The request method the route is to listen to.
	*
	* @since 1.0
	* @var array
	*/
  public $routeDatas = [];

	/**
	* The unproccessed route string.
	*
	* @since 1.0
	* @var string
	*/
  public $rawRoute = null;

	/**
	* The associate array containing the Regular expression constaints of the parameter.
	*
	* @since 1.0
	* @var array
	*/
  public $matches = [];

	/**
	* The associate array containing the Regular expression constaints of the parameter.
	*
	* @since 1.0
	* @var array
	*/
  public $defaultRegex = '[\w]+';

	/**
	* The route handler.
	*
	* @since 1.0
	* @var string
	*/
  public $handler = null;

	/**
	* Namespace used by the router to instantiate your controler class, it overwrites the group namespace.
	*
	* @since 1.0
	* @var string
	*/
  public $namespace = null;

  /**
  * Array of middleware gets merged with the parent group.
  *
  * @since 1.0
  * @var array
  */
  public $middleWare = null;

  /**
  * Route Subdomain string.
  *
  * @since 1.0
  * @var string
  */
  public $subDomain = null;

  /**
  * Route Subdomain data.
  *
  * @since 1.0
  * @var string
  */
  public $subDomainData = null;

	/**
	* This stores group name for future reference.
	*
	* @since 1.0
	* @var object
	*/
  public $groupObjectStack = null;


  /**
 * Initial route loader
 *
 * @since 1.0
 *
 * @param array              $httpMethod http method to subscribe to.
 * @param string               $route    Route path and regex data.
 * @param mixed               $handler      properties.
 */
  function __construct(array $httpMethod, string $route, $handler)
  {
    $this->setHttpMethod($httpMethod);

    $this->setRoute($route);

    $this->setHandler($handler);

    //$this->register();

    return $this;

  }


  /**
   * This add to the Regular expression constaints for a parameter
   *
   * @since 1.0
   *
   * @param string|array  $var variable name.
   * @param string        $regex    variable regex.
   */
    function where(string $var, string $regex)
    {
      // code...
    }


    /**
    * This this filters the $matches property for duplicated constraints
    *
    * @since 1.0
    *
    */
    function filterMatches()
    {
      // code...
    }



    /**
    * This sets the name of a route for reuable purpose.
    *
    * @since 1.0
    *
    * @param string        $name  route name.
    */
    function name($name)
    {
      $this->name = $name;

      return $this;
    }



    /**
    * This sets the name of a route for reuable purpose.
    *
    * @since 1.0
    *
    * @param string        $name  route name.
    */
    protected function setHttpMethod($httpMethod)
    {
      $this->httpMethod = array_values( array_unique( array_merge( $this->httpMethod, $httpMethod ) ) );
    }



    /**
    * This sets the rawRoute string and array data of a route.
    *
    * @since 1.0
    *
    * @param string        $route  route string.
    */
    protected function setRoute($route)
    {
      $this->rawRoute = $route;
      $this->routeDatas = RouteParser::parse($this->rawRoute, $this->defaultRegex);

    }



    /**
    * This sets the rawRoute string and array data of a route.
    *
    * @since 1.0
    *
    * @param mixed        $handler  Route handler.
    */
    protected function setHandler($handler)
    {
      $this->handler = $handler;

    }



    /**
    * This sets the rawRoute string and array data of a route.
    *
    * @since 1.0
    *
    * @param mixed        $options  Route options.
    */
    public function setOptions($options)
    {

      return $this;

    }


    /**
    * This set the middleware for a particular route, merges with the parent
    *
    * @since 1.0
    *
    * @param string|array  $middleware variable name.
    *
    */
    function setMiddleware( $middleware )
    {
      // code...
    }


    /**
    * This sets the domain regex and generates domain data, overrides parent domains
    *
    * @since 1.0
    *
    * @param string   $subDomain  domain data.
    */
    function subDomain($subDomain)
    {
      // code...
    }


    /**
     * This get the Regular expression constaints for a parameter
     *
     * @since 1.0
     *
	   * @return array fully merged array of Regular expression constaints for a parameter.
     */
      function getWhere(string $var, string $regex)
      {
        // code...
      }



      /**
      * This gets the name of a route for reuable purpose.
      *
      * @since 1.0
      *
 	    * @return string Name accociated with the route.
      */
      function getName()
      {
        // code...
      }


      /**
      * This gets the middleware for a particular route, merges with the parent
      *
      * @since 1.0
      *
 	    * @return array Name accociated with the route.
      *
      */
      function getMiddleware()
      {
        // code...
      }


      /**
      * This gets the domain regex and generates domain data, if route dont have inherit from group
      *
      * @since 1.0
      *
 	    * @return string subdomain pattern.
      */
      function getSubDomain()
      {
        // code...
      }


      /**
      * This gets the domain regex and generates domain data, overrides parent domains
      *
      * @since 1.0
      *
 	    * @return string subdomain pattern data.
      */
      function getSubDomainData()
      {
        // code...
      }


      /**
      * This gets the route group name
      *
      * @since 1.0
      *
 	    * @return string groupname.
      */
      function getGroupName()
      {
        // code...
      }


      /**
      * This gets the route group Object
      *
      * @since 1.0
      *
 	    * @return string group Object.
      */
      function getGroupObject()
      {
        // code...
      }






}
