<?php

namespace Examen\SorterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($range = NULL) {
        //Obtener una lista aleatoria
        $randList = $this->getRandList($range);
        //Ordernar la lista aleatoria
        $orderList = $this->getOrderList($randList);
        return $this->render('ExamenSorterBundle:Default:index.html.twig', 
                array('range' => $range, 
                    'strRandList' => $this->strList($randList),
                    'strSortList' => $this->strList($orderList)
                ));
    }

  
    /**
     * Obtener una lista aleatoria
     * @return Array
     */
    public function getRandList($range) {
        $randList = array();
        for ($i = 0; $i < $range; $i++) {
            $randList[$i] = rand(-100000, 1000000);
        }
        return $randList;
    }

    public function strList($list) {
        $strList = "[";
        foreach ($list as $item) {
            $strList.= $item . ",";
        }
        if(strlen($strList) >1){
            $strList = substr($strList, 0, strlen($strList) - 1);
        }else{
            $strList .= " ";
        }
        $strList .= "]";
        return $strList;
    }

    public function getOrderList($list) {
        if (count($list) < 2){
            return $list;
        }
        
        $k = $list[0];
        $l = $r = array();

        for ($i = count($list); --$i;) {
            if ($list[$i] <= $k) {
                $l[] = $list[$i];
            } else {
                $r[] = $list[$i];
            }
        }

        return array_merge($this->getOrderList($l), array($k), $this->getOrderList($r));
    }

}
