<?php
include '/xampp/htdocs/swapjust/swapjustConfig/Swapjust_Connection.php';
	//this method is to view all the products
	function selectAllProduct()
	{
            $sql = "SELECT * FROM hsy_product ";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
			
	}
        //this method is used to add aproduct
        function addNewProduct($sql)
        {
            $swapjustconfig = new Swapjust_Connection();
            $swapjustconfig->execute($sql);
        }
        //this method is used to add new sales entry
        function addSalesProduct($sql)
        {
            $swapjustconfig = new Swapjust_Connection();
            $swapjustconfig->execute($sql);
        }
	//this methos is used for view all the sales product
	function selectSalesProduct()
	{
            $sql = "SELECT * FROM hsy_sales ";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
	}
	//this methos is used to view product name
	function selectProductName($pid)
	{
            $sql = "select product_name from hsy_product where product_code like '".$pid."'";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getOne($sql);
            $pname  = $datas['product_name'];
            return $pname;
	}
	//this method is used to view all the unauthorised sales data
	function unAthorisedSales()
	{
            $sql = "SELECT * FROM hsy_sales WHERE status LIKE 'no' ";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
	}
	//this method is used to view all the authorised sales data
	
	function athorisedSales()
	{
            $sql = "SELECT * FROM hsy_sales WHERE status LIKE 'yes' ";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
	}
	//this method is used to view offer
	function selectDiscountOffers($pid)
	{
		$sql = "select * from hsy_offer where product_code LIKE '".$pid."'";	
                $swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getOne($sql);
                return $datas;
	}
	//this method is used view all the offers
	function selectAllOffers()
	{
            $sql = "SELECT * FROM hsy_offer";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
		
	}
	//this method is used to find out the product price
	function getProductPrice($pcode)
	{
		$price = 0;
                $sql = "SELECT mrp FROM hsy_product WHERE product_code LIKE '".$pcode."'";
		$swapjustconfig = new Swapjust_Connection();
                $datas = $swapjustconfig->getOne($sql);
                $price = $datas['mrp'];
		return $price;
	}
	
	//this method is used to find out the all authorised discount offers
	function discountAuthOfferData()
	{
                $sql = "SELECT * FROM hsy_offer WHERE status LIKE 'yes'";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this method is used to find out the unauthorised discount data
	function discountUnAuthOfferData()
	{
		 $sql = "SELECT * FROM hsy_offer WHERE status LIKE 'no'";
                $swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this method is used to find out the sales quantity
	function getSalesQuantity($pcode)
	{
		$quantity = 0;
                $sql = "SELECT quantity FROM hsy_sales WHERE product_code LIKE '".$pcode."'";
		$swapjustconfig = new Swapjust_Connection();
                $datas = $swapjustconfig->getOne($sql);
                $quantity = $datas['quantity'];
		return $quantity;
	}
	//this method is used to select all the authorised buy one get one offer
	function buyOneGetOneAuth()
	{
		$sql = "SELECT * FROM hsy_buy_one WHERE status LIKE 'yes'";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this method is used to select all unauthorised buy one get one offer
	function buyOneGetOneUnAuth()
	{
		$sql = "SELECT * FROM hsy_buy_one WHERE status LIKE 'no'";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this method is used to view all the buy one get one offers
	function allbuyOneGetOne()
	{
		$sql = "SELECT * FROM hsy_buy_one";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
        //this method is used to select a particular buy one get one 
        function selectbuOneGetOne($pid)
	{
	$sql = "select * from hsy_buy_one where offer_code like '".$pid."'";
        $swapjustconfig = new Swapjust_Connection();
        $datas = $swapjustconfig->getOne($sql);
        return $datas;
	}
       
	//this method is used to select all the authorised cumbo offer
	function comboAuth()
	{
		$sql = "SELECT * FROM hsy_combo WHERE status LIKE 'yes'";
                $swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this method is used to select all the authorised cumbo offer
	function AllCombo()
	{
		$sql = "SELECT * FROM hsy_combo";
                $swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
	//this methos is used to select a particular combo 
	function selectCombo($combo_id)
	{
	$sql = "select * from hsy_combo where combo_id like '".$combo_id."'";
        $swapjustconfig = new Swapjust_Connection();
        $datas = $swapjustconfig->getOne($sql);
        return $datas;
	}
	//this method is used to select the image from the database
	function getOfferProductImage($pid)
	{
		 $sql = "SELECT image FROM offer_images WHERE product_code LIKE '".$pid."'";
				$image = "";
				$swapjustconfig = new Swapjust_Connection();
                $datas = $swapjustconfig->getOne($sql);
                $image = $datas['image'];
				return $image;
	}
	//this method is used to select all shopkeeper details
	function selectAllShopkeepers()
	{
		$sql = "SELECT * FROM hsy_shopkeeper";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
	}
        //this method is used to view the detail stock of the store keeper have
        function productDetailOfSk()
        {
            $sql = "select * from hsy_sk_data";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            return $datas;
        }
        //this  method is used to find out the single sales product
	function selectSingleSales($pid)
        {
            $sql= "select * from hsy_sales where product_code LIKE '".$pid."'";
            $swapjustconfig = new Swapjust_Connection();
            $datas = $swapjustconfig->getOne($sql); 
            return $datas;
        }
	//this method is used to find out the particular product detail information
        function selectParticularProduct($pid)
        {
            $sql= "SELECT * FROM hsy_product WHERE product_code LIKE '".$pid."'";
            $swapjustconfig = new Swapjust_Connection();
            $datas = $swapjustconfig->getOne($sql); 
            return $datas;    
        }
        //this method is used to find out the products by their types
        function selectProductByTypes()
        {
		$sql= "SELECT product_name FROM hsy_product group by product_name";
		$swapjustconfig = new Swapjust_Connection();	
                $datas = $swapjustconfig->getAll($sql);
                return $datas;
        }
        //this method is used to select the products which is the same product
        function selectProductNames($pname)
        {
            $sql = "select * from hsy_product where product_name like '".$pname."'";
            $swapjustconfig = new Swapjust_Connection();	
            $datas = $swapjustconfig->getAll($sql);
            //$pname  = $datas['product_name'];
            return $datas;
        }
        //this method is used to get images of the product
        function selectHsyImages($pid)
        {
            
                $sql= "select * from offer_images where product_code LIKE '".$pid."'";
				$images = "";
				$i = 0;
				$swapjustconfig = new Swapjust_Connection();	
				$datas = $swapjustconfig->getAll($sql);
				foreach($datas as $image)
				{
					$images[$i++]=$image['image'];
				}
               return $images;
        }
        //this method is used to select a single image
        function selectsingleImage($pid)
        {
            $sql = "SELECT image FROM offer_images WHERE product_code LIKE '".$pid."'";
            $image = "";
            $swapjustconfig = new Swapjust_Connection();
            $datas = $swapjustconfig->getOne($sql);
            $image = $datas['image'];
            return $image;
        }
        //this method is used to get the information of the customer
	function userLogin($id,$password)
        {
            $sql = "SELECT * FROM hsy_customer WHERE (mail_id LIKE '".$id."' OR cust_mob_no LIKE '".$id."' )AND password LIKE '".$password."'";
            $swapjustconfig = new Swapjust_Connection();
            $datas = $swapjustconfig->getOne($sql);
            return $datas;
        }
        //this method is used to the information
        function selectCustomerInformation($mob_no)
        {
            $sql = "select * from hsy_customer where cust_mob_no like '".$mob_no."'";
            $swapjustconfig = new Swapjust_Connection();
            $cust_det = $swapjustconfig->getOne($sql);
            return $cust_det;
        }
        //this method is used to find out the recently added two items in combo
        function selectTwoComboOffer()
        {
            $sql =  "SELECT * FROM hsy_combo WHERE status LIKE 'yes' ORDER BY ID DESC LIMIT 2";
            $swapjustconfig = new Swapjust_Connection();
            $combos = $swapjustconfig->getAll($sql);
            return $combos;
        }
        //this method is used to select the latest two offers
        function selectBuyOneOffer()
        {
            $sql = "SELECT * FROM hsy_buy_one WHERE status LIKE 'yes' ORDER BY buy_one_id DESC LIMIT 2";
            $swapjustconfig = new Swapjust_Connection();
            $buyOne = $swapjustconfig->getAll($sql);
            return $buyOne;
        }
        function check_area_Pin($pin)
        {
           $sql = "SELECT * FROM hsy_area_code WHERE area_code LIKE '".$pin."' LIMIT 1";
            $swapjustconfig = new Swapjust_Connection();
            $check = $swapjustconfig->getOne($sql);
            $area = $check['area_code'];
            if($area != '')
            {
                $result = "100% delivery available";
                return $result;
            }
            else
            {
                $result = "Not possible delivery on this Location"; 
                return $result;
            }
            //return $area;
            
        }
        //select brand names like manufactures
        function selectGroupByBrands()
        {
            $sql = "SELECT mfd_company FROM hsy_product group by mfd_company";
            $swapjustconfig = new Swapjust_Connection();
            $brands = $swapjustconfig->getAll($sql);
            return $brands;
        }
        //select flavours group by
        function selectGroupByFlavors()
        {
            $sql = "SELECT flavor FROM hsy_product group by flavor";
            $swapjustconfig = new Swapjust_Connection();
            $flavors = $swapjustconfig->getAll($sql);
            return $flavors;
        }
        //select sizes group by
        function selectGroupBySizes()
        {
            $sql = "SELECT size FROM hsy_product group by size";
            $swapjustconfig = new Swapjust_Connection();
            $sizes = $swapjustconfig->getAll($sql);
            return $sizes;
        }
        //select product names from sales
        function selectProductsfromSales($pname)
        {
            $sql = "select * from hsy_sales where product_code in (select product_code from hsy_product where product_name like '$pname')";
            $swapjustconfig = new Swapjust_Connection();
            $salesprods = $swapjustconfig->getAll($sql);
            return $salesprods;
        }
        
?>
<?php
//rootAccess();
?>