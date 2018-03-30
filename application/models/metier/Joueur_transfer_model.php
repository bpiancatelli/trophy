<?php 

class Joueur_transfer_model extends CI_Model{    
    private $wage;

    private $bump;
    private $id;
    private $clubName;
    private $clubId;
    private $shortlisted;
    private $clubLink;
    private $name;
    private $nameJs;
    private $playerLink;
    private $routine;
    private $nat;
    private $age;
    private $fp;
    private $fpFormat;
    private $asi;
    private $asiString;

    /*Field*/
    private $str;
    private $sta;
    private $pac;
    private $mar;
    private $tac;
    private $wor;
    private $cro;
    private $pos;
    private $pas;
    private $tec;
    private $hea;
    private $fin;
    private $lon;
    private $set;

    /*GK*/
    private $han;
    private $one;
    private $ari;
    private $ref;
    private $jum;
    private $com;
    private $kic;
    private $thr;

    private $rec;
    private $time;
    private $timeString;
    private $txt;
    private $bid;
    private $nextBid;
    private $bidString;
    private $bidderId;
    private $userIsBuyer;
    private $bidderName;
    private $bidderLink;
    private $pimp;
    private $flag;
    private $country;
    private $scoutButton;
    private $pro;
    
    public function __construct($salary='', $bump ='', $id ='', $clubName ='', $clubId ='', $shortlisted ='', $clubLink ='', $name ='', $nameJs ='', $playerLink ='', $routine ='', $nat ='', $age ='', $fp ='', $fpFormat ='', $asi ='', $asiString ='', $str ='', $sta ='', $pac ='', $mar ='', $tac ='', $wor ='', $cro ='', $pos ='', $pas ='', $tec ='', $hea ='', $fin ='', $lon ='', $set ='', $han ='', $one ='', $ari ='', $ref ='', $jum ='', $com ='', $kic ='', $thr ='', $rec ='', $time ='', $timeString ='', $txt ='', $bid ='', $nextBid ='', $bidString ='', $bidderId ='', $userIsBuyer ='', $bidderName ='', $bidderLink ='', $pimp ='', $flag ='', $country ='', $scoutButton ='', $pro =''){
        parent::__construct();
        $this->wage = $salary;
        $this->bump  = $bump;
        $this->id  = $id;
        $this->clubName  = $clubName;
        $this->clubId  = $clubId;
        $this->shortlisted  = $shortlisted;
        $this->clubLink  = $clubLink;
        $this->name  = $name;
        $this->nameJs  = $nameJs;
        $this->playerLink  = $playerLink;
        $this->routine  = $routine;
        $this->nat  = $nat;
        $this->age  = $age;
        $this->fp  = $fp;
        $this->fpFormat  = $fpFormat;
        $this->asi  = $asi;
        $this->asiString  = $asiString;
        $this->str  = $str;
        $this->sta  = $sta;
        $this->pac  = $pac;
        $this->mar  = $mar;
        $this->tac  = $tac;
        $this->wor  = $wor;
        $this->cro  = $cro;
        $this->pos  = $pos;
        $this->pas  = $pas;
        $this->tec  = $tec;
        $this->hea  = $hea;
        $this->fin  = $fin;
        $this->lon  = $lon;
        $this->set  = $set;
        $this->han  = $han;
        $this->one  = $one;
        $this->ari  = $ari;
        $this->ref  = $ref;
        $this->jum  = $jum;
        $this->com  = $com;
        $this->kic  = $kic;
        $this->thr  = $thr;
        $this->rec  = $rec;
        $this->time  = $time;
        $this->timeString  = $timeString;
        $this->txt  = $txt;
        $this->bid  = $bid;
        $this->nextBid  = $nextBid;
        $this->bidString  = $bidString;
        $this->bidderId  = $bidderId;
        $this->userIsBuyer  = $userIsBuyer;
        $this->bidderName  = $bidderName;
        $this->bidderLink  = $bidderLink;
        $this->pimp  = $pimp;
        $this->flag  = $flag;
        $this->country  = $country;
        $this->scoutButton  = $scoutButton;
        $this->pro  = $pro;
    }
    



    /**
     * Gets the value of wage.
     *
     * @return mixed
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * Sets the value of wage.
     *
     * @param mixed $wage the wage
     *
     * @return self
     */
    public function setWage($wage)
    {
        $this->wage = $wage;

        return $this;
    }

    /**
     * Gets the value of bump.
     *
     * @return mixed
     */
    public function getBump()
    {
        return $this->bump;
    }

    /**
     * Sets the value of bump.
     *
     * @param mixed $bump the bump
     *
     * @return self
     */
    public function setBump($bump)
    {
        $this->bump = $bump;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of clubName.
     *
     * @return mixed
     */
    public function getClubName()
    {
        return $this->clubName;
    }

    /**
     * Sets the value of clubName.
     *
     * @param mixed $clubName the club name
     *
     * @return self
     */
    public function setClubName($clubName)
    {
        $this->clubName = $clubName;

        return $this;
    }

    /**
     * Gets the value of clubId.
     *
     * @return mixed
     */
    public function getClubId()
    {
        return $this->clubId;
    }

    /**
     * Sets the value of clubId.
     *
     * @param mixed $clubId the club id
     *
     * @return self
     */
    public function setClubId($clubId)
    {
        $this->clubId = $clubId;

        return $this;
    }

    /**
     * Gets the value of shortlisted.
     *
     * @return mixed
     */
    public function getShortlisted()
    {
        return $this->shortlisted;
    }

    /**
     * Sets the value of shortlisted.
     *
     * @param mixed $shortlisted the shortlisted
     *
     * @return self
     */
    public function setShortlisted($shortlisted)
    {
        $this->shortlisted = $shortlisted;

        return $this;
    }

    /**
     * Gets the value of clubLink.
     *
     * @return mixed
     */
    public function getClubLink()
    {
        return $this->clubLink;
    }

    /**
     * Sets the value of clubLink.
     *
     * @param mixed $clubLink the club link
     *
     * @return self
     */
    public function setClubLink($clubLink)
    {
        $this->clubLink = $clubLink;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of nameJs.
     *
     * @return mixed
     */
    public function getNameJs()
    {
        return $this->nameJs;
    }

    /**
     * Sets the value of nameJs.
     *
     * @param mixed $nameJs the name js
     *
     * @return self
     */
    public function setNameJs($nameJs)
    {
        $this->nameJs = $nameJs;

        return $this;
    }

    /**
     * Gets the value of playerLink.
     *
     * @return mixed
     */
    public function getPlayerLink()
    {
        return $this->playerLink;
    }

    /**
     * Sets the value of playerLink.
     *
     * @param mixed $playerLink the player link
     *
     * @return self
     */
    public function setPlayerLink($playerLink)
    {
        $this->playerLink = $playerLink;

        return $this;
    }

    /**
     * Gets the value of routine.
     *
     * @return mixed
     */
    public function getRoutine()
    {
        return $this->routine;
    }

    /**
     * Sets the value of routine.
     *
     * @param mixed $routine the routine
     *
     * @return self
     */
    public function setRoutine($routine)
    {
        $this->routine = $routine;

        return $this;
    }

    /**
     * Gets the value of nat.
     *
     * @return mixed
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Sets the value of nat.
     *
     * @param mixed $nat the nat
     *
     * @return self
     */
    public function setNat($nat)
    {
        $this->nat = $nat;

        return $this;
    }

    /**
     * Gets the value of age.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets the value of fp.
     *
     * @return mixed
     */
    public function getFp()
    {
        return $this->fp;
    }

    /**
     * Sets the value of fp.
     *
     * @param mixed $fp the fp
     *
     * @return self
     */
    public function setFp($fp)
    {
        $this->fp = $fp;

        return $this;
    }

    /**
     * Gets the value of fpFormat.
     *
     * @return mixed
     */
    public function getFpFormat()
    {
        return $this->fpFormat;
    }

    /**
     * Sets the value of fpFormat.
     *
     * @param mixed $fpFormat the fp format
     *
     * @return self
     */
    public function setFpFormat($fpFormat)
    {
        $this->fpFormat = $fpFormat;

        return $this;
    }

    /**
     * Gets the value of asi.
     *
     * @return mixed
     */
    public function getAsi()
    {
        return $this->asi;
    }

    /**
     * Sets the value of asi.
     *
     * @param mixed $asi the asi
     *
     * @return self
     */
    public function setAsi($asi)
    {
        $this->asi = $asi;

        return $this;
    }

    /**
     * Gets the value of asiString.
     *
     * @return mixed
     */
    public function getAsiString()
    {
        return $this->asiString;
    }

    /**
     * Sets the value of asiString.
     *
     * @param mixed $asiString the asi string
     *
     * @return self
     */
    public function setAsiString($asiString)
    {
        $this->asiString = $asiString;

        return $this;
    }

    /**
     * Gets the value of str.
     *
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Sets the value of str.
     *
     * @param mixed $str the str
     *
     * @return self
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Gets the value of sta.
     *
     * @return mixed
     */
    public function getSta()
    {
        return $this->sta;
    }

    /**
     * Sets the value of sta.
     *
     * @param mixed $sta the sta
     *
     * @return self
     */
    public function setSta($sta)
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * Gets the value of pac.
     *
     * @return mixed
     */
    public function getPac()
    {
        return $this->pac;
    }

    /**
     * Sets the value of pac.
     *
     * @param mixed $pac the pac
     *
     * @return self
     */
    public function setPac($pac)
    {
        $this->pac = $pac;

        return $this;
    }

    /**
     * Gets the value of mar.
     *
     * @return mixed
     */
    public function getMar()
    {
        return $this->mar;
    }

    /**
     * Sets the value of mar.
     *
     * @param mixed $mar the mar
     *
     * @return self
     */
    public function setMar($mar)
    {
        $this->mar = $mar;

        return $this;
    }

    /**
     * Gets the value of tac.
     *
     * @return mixed
     */
    public function getTac()
    {
        return $this->tac;
    }

    /**
     * Sets the value of tac.
     *
     * @param mixed $tac the tac
     *
     * @return self
     */
    public function setTac($tac)
    {
        $this->tac = $tac;

        return $this;
    }

    /**
     * Gets the value of wor.
     *
     * @return mixed
     */
    public function getWor()
    {
        return $this->wor;
    }

    /**
     * Sets the value of wor.
     *
     * @param mixed $wor the wor
     *
     * @return self
     */
    public function setWor($wor)
    {
        $this->wor = $wor;

        return $this;
    }

    /**
     * Gets the value of cro.
     *
     * @return mixed
     */
    public function getCro()
    {
        return $this->cro;
    }

    /**
     * Sets the value of cro.
     *
     * @param mixed $cro the cro
     *
     * @return self
     */
    public function setCro($cro)
    {
        $this->cro = $cro;

        return $this;
    }

    /**
     * Gets the value of pos.
     *
     * @return mixed
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Sets the value of pos.
     *
     * @param mixed $pos the pos
     *
     * @return self
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Gets the value of pas.
     *
     * @return mixed
     */
    public function getPas()
    {
        return $this->pas;
    }

    /**
     * Sets the value of pas.
     *
     * @param mixed $pas the pas
     *
     * @return self
     */
    public function setPas($pas)
    {
        $this->pas = $pas;

        return $this;
    }

    /**
     * Gets the value of tec.
     *
     * @return mixed
     */
    public function getTec()
    {
        return $this->tec;
    }

    /**
     * Sets the value of tec.
     *
     * @param mixed $tec the tec
     *
     * @return self
     */
    public function setTec($tec)
    {
        $this->tec = $tec;

        return $this;
    }

    /**
     * Gets the value of hea.
     *
     * @return mixed
     */
    public function getHea()
    {
        return $this->hea;
    }

    /**
     * Sets the value of hea.
     *
     * @param mixed $hea the hea
     *
     * @return self
     */
    public function setHea($hea)
    {
        $this->hea = $hea;

        return $this;
    }

    /**
     * Gets the value of fin.
     *
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Sets the value of fin.
     *
     * @param mixed $fin the fin
     *
     * @return self
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Gets the value of lon.
     *
     * @return mixed
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Sets the value of lon.
     *
     * @param mixed $lon the lon
     *
     * @return self
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Gets the value of set.
     *
     * @return mixed
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * Sets the value of set.
     *
     * @param mixed $set the set
     *
     * @return self
     */
    public function setSet($set)
    {
        $this->set = $set;

        return $this;
    }

    /**
     * Gets the value of han.
     *
     * @return mixed
     */
    public function getHan()
    {
        return $this->han;
    }

    /**
     * Sets the value of han.
     *
     * @param mixed $han the han
     *
     * @return self
     */
    public function setHan($han)
    {
        $this->han = $han;

        return $this;
    }

    /**
     * Gets the value of one.
     *
     * @return mixed
     */
    public function getOne()
    {
        return $this->one;
    }

    /**
     * Sets the value of one.
     *
     * @param mixed $one the one
     *
     * @return self
     */
    public function setOne($one)
    {
        $this->one = $one;

        return $this;
    }

    /**
     * Gets the value of ari.
     *
     * @return mixed
     */
    public function getAri()
    {
        return $this->ari;
    }

    /**
     * Sets the value of ari.
     *
     * @param mixed $ari the ari
     *
     * @return self
     */
    public function setAri($ari)
    {
        $this->ari = $ari;

        return $this;
    }

    /**
     * Gets the value of ref.
     *
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets the value of ref.
     *
     * @param mixed $ref the ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Gets the value of jum.
     *
     * @return mixed
     */
    public function getJum()
    {
        return $this->jum;
    }

    /**
     * Sets the value of jum.
     *
     * @param mixed $jum the jum
     *
     * @return self
     */
    public function setJum($jum)
    {
        $this->jum = $jum;

        return $this;
    }

    /**
     * Gets the value of com.
     *
     * @return mixed
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Sets the value of com.
     *
     * @param mixed $com the com
     *
     * @return self
     */
    public function setCom($com)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Gets the value of kic.
     *
     * @return mixed
     */
    public function getKic()
    {
        return $this->kic;
    }

    /**
     * Sets the value of kic.
     *
     * @param mixed $kic the kic
     *
     * @return self
     */
    public function setKic($kic)
    {
        $this->kic = $kic;

        return $this;
    }

    /**
     * Gets the value of thr.
     *
     * @return mixed
     */
    public function getThr()
    {
        return $this->thr;
    }

    /**
     * Sets the value of thr.
     *
     * @param mixed $thr the thr
     *
     * @return self
     */
    public function setThr($thr)
    {
        $this->thr = $thr;

        return $this;
    }

    /**
     * Gets the value of rec.
     *
     * @return mixed
     */
    public function getRec()
    {
        return $this->rec;
    }

    /**
     * Sets the value of rec.
     *
     * @param mixed $rec the rec
     *
     * @return self
     */
    public function setRec($rec)
    {
        $this->rec = $rec;

        return $this;
    }

    /**
     * Gets the value of time.
     *
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets the value of time.
     *
     * @param mixed $time the time
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets the value of timeString.
     *
     * @return mixed
     */
    public function getTimeString()
    {
        return $this->timeString;
    }

    /**
     * Sets the value of timeString.
     *
     * @param mixed $timeString the time string
     *
     * @return self
     */
    public function setTimeString($timeString)
    {
        $this->timeString = $timeString;

        return $this;
    }

    /**
     * Gets the value of txt.
     *
     * @return mixed
     */
    public function getTxt()
    {
        return $this->txt;
    }

    /**
     * Sets the value of txt.
     *
     * @param mixed $txt the txt
     *
     * @return self
     */
    public function setTxt($txt)
    {
        $this->txt = $txt;

        return $this;
    }

    /**
     * Gets the value of bid.
     *
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Sets the value of bid.
     *
     * @param mixed $bid the bid
     *
     * @return self
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Gets the value of nextBid.
     *
     * @return mixed
     */
    public function getNextBid()
    {
        return $this->nextBid;
    }

    /**
     * Sets the value of nextBid.
     *
     * @param mixed $nextBid the next bid
     *
     * @return self
     */
    public function setNextBid($nextBid)
    {
        $this->nextBid = $nextBid;

        return $this;
    }

    /**
     * Gets the value of bidString.
     *
     * @return mixed
     */
    public function getBidString()
    {
        return $this->bidString;
    }

    /**
     * Sets the value of bidString.
     *
     * @param mixed $bidString the bid string
     *
     * @return self
     */
    public function setBidString($bidString)
    {
        $this->bidString = $bidString;

        return $this;
    }

    /**
     * Gets the value of bidderId.
     *
     * @return mixed
     */
    public function getBidderId()
    {
        return $this->bidderId;
    }

    /**
     * Sets the value of bidderId.
     *
     * @param mixed $bidderId the bidder id
     *
     * @return self
     */
    public function setBidderId($bidderId)
    {
        $this->bidderId = $bidderId;

        return $this;
    }

    /**
     * Gets the value of userIsBuyer.
     *
     * @return mixed
     */
    public function getUserIsBuyer()
    {
        return $this->userIsBuyer;
    }

    /**
     * Sets the value of userIsBuyer.
     *
     * @param mixed $userIsBuyer the user is buyer
     *
     * @return self
     */
    public function setUserIsBuyer($userIsBuyer)
    {
        $this->userIsBuyer = $userIsBuyer;

        return $this;
    }

    /**
     * Gets the value of bidderName.
     *
     * @return mixed
     */
    public function getBidderName()
    {
        return $this->bidderName;
    }

    /**
     * Sets the value of bidderName.
     *
     * @param mixed $bidderName the bidder name
     *
     * @return self
     */
    public function setBidderName($bidderName)
    {
        $this->bidderName = $bidderName;

        return $this;
    }

    /**
     * Gets the value of bidderLink.
     *
     * @return mixed
     */
    public function getBidderLink()
    {
        return $this->bidderLink;
    }

    /**
     * Sets the value of bidderLink.
     *
     * @param mixed $bidderLink the bidder link
     *
     * @return self
     */
    public function setBidderLink($bidderLink)
    {
        $this->bidderLink = $bidderLink;

        return $this;
    }

    /**
     * Gets the value of pimp.
     *
     * @return mixed
     */
    public function getPimp()
    {
        return $this->pimp;
    }

    /**
     * Sets the value of pimp.
     *
     * @param mixed $pimp the pimp
     *
     * @return self
     */
    public function setPimp($pimp)
    {
        $this->pimp = $pimp;

        return $this;
    }

    /**
     * Gets the value of flag.
     *
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets the value of flag.
     *
     * @param mixed $flag the flag
     *
     * @return self
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Gets the value of country.
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the value of country.
     *
     * @param mixed $country the country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets the value of scoutButton.
     *
     * @return mixed
     */
    public function getScoutButton()
    {
        return $this->scoutButton;
    }

    /**
     * Sets the value of scoutButton.
     *
     * @param mixed $scoutButton the scout button
     *
     * @return self
     */
    public function setScoutButton($scoutButton)
    {
        $this->scoutButton = $scoutButton;

        return $this;
    }

    /**
     * Gets the value of pro.
     *
     * @return mixed
     */
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * Sets the value of pro.
     *
     * @param mixed $pro the pro
     *
     * @return self
     */
    public function setPro($pro)
    {
        $this->pro = $pro;

        return $this;
    }
}

