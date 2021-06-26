<?php

	if(! class_exists('Register')) {
		class Register
		{
			static function columnsList( $vars, $sep = ', ' ){
				
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static function valuesList( $vars, $sep = "', '" ){
				
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
			static function add( $params ){
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = get_class(); 
				
				
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
			
				if( $result )
					alerts('کاربر با موفقیت ثبت شد!', 'success');
                    echo "ثبت نام انجام شد";

			}
			static function update(){}
			static function delete(){}
			static function find($where='TRUE',$order='id DESC',$count=10000,$offset=0){
                	$tableName = get_class();
                    $sql = "SELECT * FROM {$tableName} 
                    WHERE {$where} 
                    ORDER BY {$order} 
                    LIMIT {$offset}, {$count}";
                    $table = $GLOBALS['db'] -> execute( $sql );
                    return $table;
            }
		}
	}
?>