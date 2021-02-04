<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'action' => 'Action',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'action' => 'Action',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
            'approved'                  => 'Approved',
            'approved_helper'           => ' ',
            'action' => 'Action',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'action' => 'Action',
        ],
    ],
    'country'        => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'num_code'           => 'Num Code',
            'num_code_helper'    => ' ',
            'code_2'             => 'Code 2',
            'code_2_helper'      => ' ',
            'code_3'             => 'Code 3',
            'code_3_helper'      => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'nationality'        => 'Nationality',
            'nationality_helper' => ' ',
            'is_active'          => 'Is Active',
            'is_active_helper'   => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'profile'          => [
        'title'          => 'Profiles',
        'title_singular' => 'Profile',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'user'                    => 'User',
            'user_helper'             => ' ',
            'country'                 => 'Nationality',
            'country_helper'          => ' ',
            'mobile'                  => 'Mobile',
            'mobile_helper'           => ' ',
            'gender'                  => 'Gender',
            'gender_helper'           => ' ',
            'reference_mobile'        => 'Reference Mobile',
            'reference_mobile_helper' => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'avatar'                  => 'Profile',
            'avatar_helper'           => ' ',
            'reference_name'          => 'Reference Name',
            'reference_name_helper'   => ' ',
            'about'                   => 'Short BIO',
            'about_helper'            => ' ',
        ],
    ],
    'setting'          => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => ' ',
            'site_title'                      => 'Site Title',
            'site_title_helper'               => ' ',
            'favicon'                         => 'Favicon',
            'favicon_helper'                  => ' ',
            'logo'                            => 'Logo',
            'logo_helper'                     => ' ',
            'meta_description'                => 'Meta Description',
            'meta_description_helper'         => ' ',
            'meta_keywords'                   => 'Meta Keywords',
            'meta_keywords_helper'            => 'Meta Keywords',
            'banner_heading'                  => 'Banner Heading',
            'banner_heading_helper'           => 'BVCL Heading',
            'banner_sub_heading'              => 'Banner Sub Heading',
            'banner_sub_heading_helper'       => 'BVCL Sub Heading',
            'watermark'                       => 'Watermark',
            'watermark_helper'                => ' ',
            'watermark_image'                 => 'Watermark Image',
            'watermark_image_helper'          => ' ',
            'banner'                          => 'Banner',
            'banner_helper'                   => ' ',
            'site_email'                      => 'Site Email',
            'site_email_helper'               => ' ',
            'site_phone_number'               => 'Site Phone Number',
            'site_phone_number_helper'        => ' ',
            'address'                         => 'Address',
            'address_helper'                  => ' ',
            'google_analytics'                => 'Google Analytics',
            'google_analytics_helper'         => ' ',
            'maintenance_mode'                => 'Maintenance Mode',
            'maintenance_mode_helper'         => ' ',
            'maintenance_mode_title'          => 'Maintenance Mode Title',
            'maintenance_mode_title_helper'   => ' ',
            'maintenance_mode_content'        => 'Maintenance Mode Content',
            'maintenance_mode_content_helper' => ' ',
            'homepage_background'             => 'Homepage Background',
            'homepage_background_helper'      => ' ',
            'copyright'                       => 'Copyright',
            'copyright_helper'                => ' ',
            'facebook'                        => 'Facebook',
            'facebook_helper'                 => 'https://www.facebook.com/',
            'facebook_icon'                   => 'Facebook Icon',
            'facebook_icon_helper'            => ' ',
            'twitter'                         => 'Twitter',
            'twitter_helper'                  => 'https://www.twitter.com/',
            'twitter_icon'                    => 'Twitter Icon',
            'twitter_icon_helper'             => 'Twitter Icon',
            'linkedin'                        => 'Linkedin',
            'linkedin_helper'                 => 'https://www.linkedin.com/',
            'linkedin_icon'                   => 'Linkedin Icon',
            'linkedin_icon_helper'            => ' ',
            'summary'                         => 'Summary',
            'summary_helper'                  => ' ',
            'about'                           => 'About',
            'about_helper'                    => ' ',
            'created_at'                      => 'Created at',
            'created_at_helper'               => ' ',
            'updated_at'                      => 'Updated at',
            'updated_at_helper'               => ' ',
            'deleted_at'                      => 'Deleted at',
            'deleted_at_helper'               => ' ',
        ],
    ],
];
