<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 15/8/14
 * Time: 8:26 PM
 */

class Retrive_data extends CI_Model{

    function upcomingEvents($timestamp){
        $query = $this->db->query("select event_id,header
                                   from event_details where timestamp >'$timestamp'
                                   order by timestamp limit 5");

        return $query->result();
    }

    function famousColumns(){
        $query = $this->db->query("select cd.header,cd.column_id
                                  from column_reviews cr inner join column_details cd on cr.column_id = cd.column_id
                                  where cd.status='Active'
                                  group by cd.column_id
                                  order by sum(liked)
                                  limit 5");
        return $query->result();
    }

    function retriveColumn($column_id){
        $query = $this->db->query("select cd.header,cd.timestamp,cd.content,ud.username,ud.user_id,ud.profilepic from column_details cd inner join user_details ud on cd.user_id = ud.user_id where cd.column_id='$column_id'");

        return $query;
    }
}