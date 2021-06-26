<?php
	if(! class_exists('Product')) {
		class Product
		{
			static function columnsList( $vars, $sep = ', ' ){
				
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static function valuesList( $vars, $sep = "', '" ){
				
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
            	static protected function columnValueList( $vars, $sep = ', ' ){
				// = رشته‌ای شامل زوج اسامی و مقادیر جدول جدا شده با
				foreach($vars as $key => $value){
					$varPairs[] = "{$key} = '{$value}'";
				}
				return join($sep , $varPairs);		
			}
			static function add( $params ){
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = get_class(); 
				
				
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
			
				if( $result )
					alerts('محصول با موفقیت ثبت شد!', 'success');

			}
		static public function update( $params ){
				$columnValueString = self::columnValueList( $params );
				
				$tableName = static::class; // self::class // __CLASS__
				
				// 2. create insert query
				$sql = "UPDATE {$tableName}
						SET {$columnValueString}
						WHERE id = {$params['id']}";
				$result = $GLOBALS['db'] -> execute( $sql );
				// C. success message
				//اگر با موفقیت درج شد
				if( $result ){
					Alert::alerts("{$tableName} با موفقیت ویرایش شد!", 'success');
				}
			}
			static public function delete($id){
				$tableName = get_class(); // self::class // __CLASS__ // get_class()
				/*$sql = "DELETE FROM {$tableName}
						WHERE id = {$id}";*/
				$sql = "UPDATE {$tableName}
						SET status = 'deleted'
						WHERE id = {$id}";
				$result = $GLOBALS['db'] -> execute( $sql );
				// C. success message
				//اگر با موفقیت درج شد
				//if( $result ){
					Alert::alerts("{$tableName} با موفقیت حذف شد!", 'success');
				//}
			}
			static function find($where='TRUE',$order='id DESC',$count=10000,$offset=0){
                	$tableName = get_class();
                    $sql = "SELECT * FROM {$tableName} 
                    WHERE {$where} AND status != 'deleted'
                    ORDER BY {$order} 
                    LIMIT {$offset}, {$count}";
                    $table = $GLOBALS['db'] -> execute( $sql );
                    return $table;
            }
		}
	}
?>