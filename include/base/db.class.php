<?php

class DB
{
	private static $initialized = false;
	private static $conn = null;

	public function __construct() {
		if (DB::$initialized === false)
		{
			// initialize db connection
			DB::$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
						or die("fatal error: could not connect to database! Check your config.");
			
			mysqli_set_charset(DB::$conn, 'utf8mb4');
			DB::$initialized = true;
		}			
	}	
		
	/**
     * @since 1.0
	 *
	 * Sanitize SQL input
	 * 
	 * @return string	escapes the input string
     * 
	 */
	public function escapeString($str) {
		return "'".mysqli_real_escape_string(DB::$conn, $str)."'";
	}		
	

	/**
     * @since 1.0
	 *
	 * Insert SQL data
	 * 
	 * @return mixed	last id or result array
     * 
	 */
	public function queryInsert($query, $return_last_id = true) {
		$result = mysqli_query(DB::$conn, $query) or $this->showError();
		return ($return_last_id) ? mysqli_insert_id(DB::$conn) : $result;
	}

	
	/**
     * @since 1.0
	 *
	 * Retrieve SQL data from a single row
	 * 
	 * @return mixed	list of results, boolean
     * 
	 */
	public function queryOneRow($query, $object = false) {
		$rows = $this->query($query, $object);
		return ($rows ? $rows[0] : false);
    }
		
	
	/**
     * @since 1.0
	 *
	 * Count SQL rows
	 * 
	 * @return int	number of rows
     * 
	 */
    public function queryCount($query) {
        return mysqli_num_rows( mysqli_query(DB::$conn, $query) );
	}
		

	/**
     * @since 1.0
	 *
	 * Retrieve list of SQL results
	 * 
	 * Return options as objects or rows
	 * 
	 * @return array	list of results
     * 
	 */
	public function query($query, $object = false) {
		$result = mysqli_query(DB::$conn, $query) or $this->showError();
		
		if ($result === false || $result === true) {
			return array();
		}
		
		$rows = array();
		if ($object) {
			while ($row = mysqli_fetch_object($result)) {
				$rows[] = $row;
			}
		} else {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
		}
		
		mysqli_free_result($result);
		return $rows;
	}
	

	/**
     * @since 1.0
	 *
	 * Error handler
	 * 
	 * @return string	error message
     * 
	 */
	public function showError($terminate = false) {
		var_dump(mysqli_error(DB::$conn));
    }
}