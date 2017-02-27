<?php

$config = array
(
    'contact' => array
    (
        array
        (
            'field' => 'first_name',
            'label' => 'first name',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'last_name',
            'label' => 'last name',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'address1',
            'label' => 'address',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'address2',
            'label' => 'second address',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'city',
            'label' => 'city',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'state',
            'label' => 'state',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'zip',
            'label' => 'zip code',
            'rules' => 'trim|stripslashes|strip_tags|required|numeric|exact_length[5]',
        ),
        array
        (
            'field' => 'cell_phone',
            'label' => 'cell phone',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'alt_phone',
            'label' => 'alternate phone',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'liame',
            'label' => 'email address',
            'rules' => 'trim|stripslashes|strip_tags|required|valid_email',
        ),
        array
        (
            'field' => 'how_hear',
            'label' => '&ldquo;how you heard about us&rdquo;',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'comments',
            'label' => 'comments',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
    ),
    'add_event' => array
    (
        array
        (
            'field' => 'name',
            'label' => 'event name',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'type_id',
            'label' => 'event type',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'start_date',
            'label' => 'start date',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'start_time',
            'label' => 'start time',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'end_date',
            'label' => 'end date',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'end_time',
            'label' => 'end time',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'location',
            'label' => 'event location',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'address',
            'label' => 'event address',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'description',
            'label' => 'description',
            'rules' => 'trim|stripslashes',
        ),
        array
        (
            'field' => 'comments',
            'label' => 'comments',
            'rules' => 'trim|stripslashes',
        ),
        array
        (
            'field' => 'latitude',
            'label' => 'latitude',
            'rules' => 'trim|stripslashes|strip_tags|decimal',
        ),
        array
        (
            'field' => 'longitude',
            'label' => 'longitude',
            'rules' => 'trim|stripslashes|strip_tags|decimal',
        ),
        array
        (
            'field' => 'all_day_event',
            'label' => 'all-day event',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'multiday_event',
            'label' => 'multiday event',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'no_end_date',
            'label' => 'no end date',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'rsvp_only',
            'label' => 'RSVP-only',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'hide_address',
            'label' => 'hide address',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'status',
            'label' => 'status',
            'rules' => 'trim',
        ),
    ),
    'add_edit_event' => array
    (
        array
        (
            'field' => 'name',
            'label' => 'event name',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'type_id',
            'label' => 'event type',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'start_date',
            'label' => 'start date',
            'rules' => 'trim|stripslashes|strip_tags|required',
        ),
        array
        (
            'field' => 'start_time',
            'label' => 'start time',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'end_date',
            'label' => 'end date',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'end_time',
            'label' => 'end time',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'location',
            'label' => 'event location',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'address',
            'label' => 'event address',
            'rules' => 'trim|stripslashes|strip_tags',
        ),
        array
        (
            'field' => 'description',
            'label' => 'description',
            'rules' => 'trim|stripslashes',
        ),
        array
        (
            'field' => 'comments',
            'label' => 'comments',
            'rules' => 'trim|stripslashes',
        ),
        array
        (
            'field' => 'latitude',
            'label' => 'latitude',
            'rules' => 'trim|stripslashes|strip_tags|decimal',
        ),
        array
        (
            'field' => 'longitude',
            'label' => 'longitude',
            'rules' => 'trim|stripslashes|strip_tags|decimal',
        ),
        array
        (
            'field' => 'all_day_event',
            'label' => 'all-day event',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'multiday_event',
            'label' => 'multiday event',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'no_end_date',
            'label' => 'no end date',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'rsvp_only',
            'label' => 'RSVP-only',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'hide_address',
            'label' => 'hide address',
            'rules' => 'trim',
        ),
        array
        (
            'field' => 'status',
            'label' => 'status',
            'rules' => 'trim',
        ),
    ),
);
