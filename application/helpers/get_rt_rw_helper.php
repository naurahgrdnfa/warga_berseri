<?php

function get_rt()
{
	$ci = get_instance();
	$email = $ci->session->email;
	$ci->db->select('rt');
	$ci->db->from('user');
	$ci->db->where('email', $email);
	$rt = $ci->db->get()->row();
	return $rt->rt;
}

function get_rw()
{
	$ci = get_instance();
	$email = $ci->session->email;
	$ci->db->select('rw');
	$ci->db->from('user');
	$ci->db->where('email', $email);
	$rw = $ci->db->get()->row();
	return $rw->rw;
}
