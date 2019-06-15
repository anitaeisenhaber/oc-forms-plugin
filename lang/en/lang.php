<?php return [
    'plugin' => [
        'name' => 'Forms',
        'description' => '',
    ],
    'tabs' => [
        'fields' => 'Fields',
        'privacy' => 'Privacy',
        'antispam' => 'Antispam',
        'styling' => 'Styling',
        'emailing' => 'Emailing',
    ],
    'forms' => [
        'field' => [
            'title' => 'Title',
            'code' => 'Code',
        ],
    ],
    'mail' => [
        'templates' => [
            'autoreply' => 'ABWebDevelopers Forms - Auto-reply Message',
            'notification' => 'ABWebDevelopers Forms - Notification Message',
        ]
    ],
    'customForm' => [
        'formCode' => [
            'title' => 'Use Form',
            'description' => 'Define the form to use by its code',
        ],
        'cacheView' => [
            'title' => 'Cache the Form',
            'description' => 'Should the rendered view be cached?',
        ],
        'cacheLifetime' => [
            'title' => 'Cache Lifetime',
            'description' => 'The amount of minutes the cache should last for',
        ],
        'validation' => [
            'recaptchaFailed' => 'You must complete the reCAPTCHA verification',
            'noData' => 'No data supplied',
            'invalidNotificationRecipients' => 'Notification recipients list contains invalid email address',
        ]
    ],
    'models' => [
        'all' => [
            'created_at' => [
                'label' => 'Created At',
            ],
            'updated_at' => [
                'label' => 'Updated At',
            ],
            'sort_order' => [
                'label' => 'Display Order',
            ],
            'override' => [
                'label' => 'Override system defaults',
                'comment' => 'On: Override | Off: Inherit'
            ],
            'overriden' => [
                'comment' => 'Can be overridden per form'
            ]
        ],
        'settings' => [
            'form_class' => [
                'label' => 'Form Class',
                'comment' => 'CSS Class for the Form',
            ],
            'field_class' => [
                'label' => 'Field Class',
                'comment' => 'CSS Class for the Field',
            ],
            'row_class' => [
                'label' => 'Row Class',
                'comment' => 'CSS Class for the Row',
            ],
            'group_class' => [
                'label' => 'Group Class',
                'comment' => 'CSS Class for the Group',
            ],
            'label_class' => [
                'label' => 'Label Class',
                'comment' => 'CSS Class for the Label',
            ],
            'submit_class' => [
                'label' => 'Submit Class',
                'comment' => 'CSS Class of the submit button',
            ],
            'submit_text' => [
                'label' => 'Submit Text',
                'comment' => 'Text to display in the submit button',
            ],
            'enable_cancel' => [
                'label' => 'Enable Cancel',
                'comment' => 'Will go back to referer if clicked',
            ],
            'cancel_class' => [
                'label' => 'Cancel Class',
                'comment' => 'CSS Class of the cancel button (if enabled)',
            ],
            'cancel_text' => [
                'label' => 'Cancel Text',
                'comment' => 'Text to display in the cancel button (if enabled)',
            ],
            'saves_data' => [
                'label' => 'Save Data?',
                'comment' => 'Choose whether or not to save submission data to the database (recommended)',
            ],
            'store_ips' => [
                'label' => 'Store IP Addresses?',
                'comment' => 'Choose whether or not to store IP addresses along with submissions',
            ],
            'enable_recaptcha' => [
                'label' => 'Enable Recpatcha',
                'comment' => 'Should this Form require recpatcha?',
            ],
            'recaptcha_public_key' => [
                'label' => 'ReCAPTCHA Public Key',
                'comment' => 'Google ReCAPTCHA (Public) API Key',
            ],
            'recaptcha_secret_key' => [
                'label' => 'ReCAPTCHA Secret Key',
                'comment' => 'Google ReCAPTCHA (Private) API Key',
            ],
            '_furtherProtection' => [
                'label' => 'Further Protection',
            ],
            'enable_ip_restriction' => [
                'label' => 'Enable IP Restriction',
                'comment' => 'Choose to enable an IP restriction for this form',
            ],
            'max_requests_per_day' => [
                'label' => 'Max Requests Per Day',
                'comment' => 'Maximum amount of daily submissions',
            ],
            'throttle_message' => [
                'label' => 'Throttle Message',
                'comment' => 'Choose what to display to a user who has exceeded their daily submissions',
            ],
            'queue_emails' => [
                'label' => 'Queue Emails?',
                'comment' => 'Choose whether or not to add emails to the queue rather than sending synchronously (recommened)'
            ],
            '_notifications' => [
                'label' => 'Automatic Notifications',
            ],
            'send_notifications' => [
                'label' => 'Send Notifications',
                'comment' => 'Decide if you would like to receive notifications for each submission. Can be overriden, per form',
            ],
            'notification_template' => [
                'label' => 'Notification Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'notification_recipients' => [
                'label' => 'Notification Recipients',
                'comment' => 'Comma separated email addresses',
            ],
            '_autoReply' => [
                'label' => 'Automatic Replies',
            ],
            'auto_reply' => [
                'label' => 'Auto Reply?',
                'comment' => 'Send automated reply to user who submits this form. Fields must be configured, per form',
            ],
            'auto_reply_email_field_id' => [
                'label' => 'Auto Reply Email Field',
                'comment' => 'Select the field to use as the email address to auto reply to',
            ],
            'auto_reply_name_field_id' => [
                'label' => 'Auto Reply Name Field',
                'comment' => 'Select the field to use as the name when auto replying',
            ],
            'auto_reply_template' => [
                'label' => 'Auto Reply Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            '_styleSection' => [
                'label' => 'Styles',
                'comment' => 'All of the below can be overriden, per form and/or field',
            ],
            'field_error_class' => [
                'label' => 'Field Error Class',
                'comment' => 'CSS Class to apply to a field on error',
            ],
            'field_success_class' => [
                'label' => 'Field Success Class',
                'comment' => 'CSS Class to apply to a field on success',
            ],
            'label_error_class' => [
                'label' => 'Label Error Class',
                'comment' => 'CSS Class to apply to a label on error',
            ],
            'label_success_class' => [
                'label' => 'Label Success Class',
                'comment' => 'CSS Class to apply to a label on success',
            ],
            'form_error_class' => [
                'label' => 'Form Error Class',
                'comment' => 'CSS Class to apply to a form on error',
            ],
            'form_success_class' => [
                'label' => 'Form Success Class',
                'comment' => 'CSS Class to apply to a form on success',
            ],
        ],
        'form' => [
            'title' => [
                'label' => 'Form Title',
                'comment' => 'The title of the form (display in email, etc)'
            ],
            'code' => [
                'label' => 'Form Code',
                'comment' => 'The form\'s code (snake_case only)'
            ],
            'description' => [
                'label' => 'Form Description',
                'comment' => 'A little description about the forms purpose'
            ],
            'form_class' => [
                'label' => 'Form Class',
                'comment' => 'CSS Class for the Form',
            ],
            'field_class' => [
                'label' => 'Field Class',
                'comment' => 'CSS Class for the Field',
            ],
            'row_class' => [
                'label' => 'Row Class',
                'comment' => 'CSS Class for the Row',
            ],
            'group_class' => [
                'label' => 'Group Class',
                'comment' => 'CSS Class for the Group',
            ],
            'label_class' => [
                'label' => 'Label Class',
                'comment' => 'CSS Class for the Label',
            ],
            'submit_class' => [
                'label' => 'Submit Class',
                'comment' => 'CSS Class of the submit button',
            ],
            'submit_text' => [
                'label' => 'Submit Text',
                'comment' => 'Text to display in the submit button',
            ],
            'enable_cancel' => [
                'label' => 'Enable Cancel',
                'comment' => 'Will go back to referer if clicked',
            ],
            'cancel_class' => [
                'label' => 'Cancel Class',
                'comment' => 'CSS Class of the cancel button (if enabled)',
            ],
            'cancel_text' => [
                'label' => 'Cancel Text',
                'comment' => 'Text to display in the cancel button (if enabled)',
            ],
            'saves_data' => [
                'label' => 'Save Data?',
                'comment' => 'Choose whether or not to save submission data to the database (recommended)',
            ],
            'enable_recaptcha' => [
                'label' => 'Enable Recpatcha',
                'comment' => 'Should this Form require recpatcha?',
            ],
            'enable_ip_restriction' => [
                'label' => 'Enable IP Restriction',
                'comment' => 'Choose to enable an IP restriction for this form',
            ],
            'max_requests_per_day' => [
                'label' => 'Max Requests Per Day',
                'comment' => 'Maximum amount of daily submissions',
            ],
            'throttle_message' => [
                'label' => 'Throttle Message',
                'comment' => 'Choose what to display to a user who has exceeded their daily submissions',
            ],
            '_notifications' => [
                'label' => 'Automatic Notifications',
            ],
            'send_notifications' => [
                'label' => 'Send Notifications',
                'comment' => 'Decide if you would like to receive notifications for each submission',
            ],
            'notification_template' => [
                'label' => 'Notification Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'notification_recipients' => [
                'label' => 'Notification Recipients',
                'comment' => 'Comma separated email addresses',
            ],
            '_autoReply' => [
                'label' => 'Automatic Replies',
            ],
            'auto_reply' => [
                'label' => 'Auto Reply?',
                'comment' => 'Send automated reply to user who submits this form',
            ],
            'auto_reply_email_field_id' => [
                'label' => 'Auto Reply Email Field',
                'comment' => 'Select the field to use as the email address to auto reply to',
            ],
            'auto_reply_name_field_id' => [
                'label' => 'Auto Reply Name Field',
                'comment' => 'Select the field to use as the name when auto replying',
            ],
            'auto_reply_template' => [
                'label' => 'Auto Reply Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Name',
                'comment' => 'Used as the label for this field',
            ],
            'code' => [
                'label' => 'Code',
                'comment' => 'Used to identify this field. Must be in snake_case',
            ],
            'type' => [
                'label' => 'Type',
                'comment' => 'Choose the type of field',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'Optional. A description of this field',
            ],
            'placeholder' => [
                'label' => 'Placeholder',
                'comment' => '',
            ],
            'required' => [
                'label' => 'Required',
                'comment' => 'Synonymous for adding the "required" validation rule',
            ],
            'validation_rules' => [
                'label' => 'Validation Rules',
                'comment' => 'See documentation for more info: https://octobercms.com/docs/services/validation#available-validation-rules',
            ],
            'validation_message' => [
                'label' => 'Validation Message',
                'comment' => 'What message should be shown on failure',
            ],
            'field_class' => [
                'label' => 'Field Class',
                'comment' => 'Overrides any form / global settings',
            ],
            'row_class' => [
                'label' => 'Row Class',
                'comment' => 'Overrides any form / global settings',
            ],
            'group_class' => [
                'label' => 'Group Class',
                'comment' => 'Overrides any form / global settings',
            ],
            'label_class' => [
                'label' => 'Label Class',
                'comment' => 'Overrides any form / global settings',
            ],
        ]
    ]
];