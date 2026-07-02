<?php

return [
    'events' => [
        'App\Events\CreateUser' => [
            [
                'action' => 'New User',
                'module' => 'general',
                'type' => 'super admin',
                'extractor' => 'Zerp\Webhook\Extractors\UserDataExtractor'
            ],
            [
                'action' => 'New User',
                'module' => 'general',
                'type' => 'company',
                'extractor' => 'Zerp\Webhook\Extractors\UserDataExtractor'
            ]
        ],

        // event use pending
        // 'App\Events\CreateSubscriber' => [
        //     'action' => 'New Subscriber',
        //     'module' => 'general',
        //     'type' => 'super admin',
        //     'extractor' => 'Zerp\Webhook\Extractors\SubscriberDataExtractor'
        // ],

        'App\Events\CreateSalesInvoice' => [
            'action' => 'New Sales Invoice',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\SalesInvoiceDataExtractor'
        ],
        'App\Events\PostSalesInvoice' => [
            'action' => 'Sales Invoice Status Updated',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\PostSalesInvoiceDataExtractor'
        ],
        'App\Events\CreateSalesProposal' => [
            'action' => 'New Sales Proposal',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\SalesProposalDataExtractor'
        ],
        'App\Events\AcceptSalesProposal' => [
            'action' => 'Sales Proposal Status Updated',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\AcceptSalesProposalDataExtractor'
        ],
        'App\Events\CreatePurchaseInvoice' => [
            'action' => 'New Purchase Invoice',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\PurchaseInvoiceDataExtractor'
        ],
        'App\Events\CreateWarehouse' => [
            'action' => 'New Warehouse',
            'module' => 'general',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\WarehouseDataExtractor'
        ],
        // Add other package wise event and data in this only, and create "Extractors" proper no need to do anything else

        'Zerp\Account\Events\CreateCustomer' => [
            'action' => 'New Customer',
            'module' => 'Account',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\CustomerDataExtractor'
        ],
        'Zerp\Account\Events\CreateVendor' => [
            'action' => 'New Vendor',
            'module' => 'Account',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\VendorDataExtractor'
        ],
        'Zerp\Account\Events\CreateRevenue' => [
            'action' => 'New Revenue',
            'module' => 'Account',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\RevenueDataExtractor'
        ],
        'Zerp\Recruitment\Events\CreateJobPosting' => [
            'action' => 'New Job Posting',
            'module' => 'Recruitment',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\JobPostingDataExtractor'
        ],
        'Zerp\Recruitment\Events\CreateCandidate' => [
            'action' => 'New Job Candidate',
            'module' => 'Recruitment',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\JobCandidateDataExtractor'
        ],
        'Zerp\Recruitment\Events\CreateInterview' => [
            'action' => 'New Job Interview Schedule',
            'module' => 'Recruitment',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\JobInterviewScheduleDataExtractor'
        ],
        'Zerp\Recruitment\Events\ConvertOfferToEmployee' => [
            'action' => 'New Convert To Employee',
            'module' => 'Recruitment',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\ConvertToEmployeeDataExtractor'
        ],
        'Zerp\Training\Events\CreateTraining' => [
            'action' => 'New Training',
            'module' => 'Training',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\TrainingDataExtractor'
        ],
        'Zerp\Training\Events\CreateTrainer' => [
            'action' => 'New Trainer',
            'module' => 'Training',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\TrainerDataExtractor'
        ],
        'Zerp\ZoomMeeting\Events\CreateZoomMeeting' => [
            'action' => 'New Zoom Meeting',
            'module' => 'ZoomMeeting',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\ZoomMeetingDataExtractor'
        ],
        'Zerp\Taskly\Events\CreateProject' => [
            'action' => 'New Project',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\ProjectDataExtractor'
        ],
        'Zerp\Taskly\Events\CreateProjectMilestone' => [
            'action' => 'New Milestone',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\MilestoneDataExtractor'
        ],
        'Zerp\Taskly\Events\CreateProjectTask' => [
            'action' => 'New Task',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\TaskDataExtractor'
        ],
        'Zerp\Taskly\Events\UpdateTaskStage' => [
            'action' => 'Task Stage Update',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\TaskStageUpdateDataExtractor'
        ],
        'Zerp\Taskly\Events\CreateTaskComment' => [
            'action' => 'New Task Comment',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\TaskCommentDataExtractor'
        ],
        'Zerp\Taskly\Events\CreateProjectBug' => [
            'action' => 'New Bug',
            'module' => 'Taskly',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\BugDataExtractor'
        ],
        'Zerp\Lead\Events\CreateLead' => [
            'action' => 'New Lead',
            'module' => 'Lead',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\LeadDataExtractor'
        ],
        'Zerp\Lead\Events\CreateDeal' => [
            'action' => 'New Deal',
            'module' => 'Lead',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\DealDataExtractor'
        ],
        'Zerp\Lead\Events\LeadMoved' => [
            'action' => 'Lead Moved',
            'module' => 'Lead',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\LeadMovedDataExtractor'
        ],
        'Zerp\Lead\Events\DealMoved' => [
            'action' => 'Deal Moved',
            'module' => 'Lead',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\DealMovedDataExtractor'
        ],
        'Zerp\Lead\Events\LeadConvertDeal' => [
            'action' => 'Convert To Deal',
            'module' => 'Lead',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\ConvertToDealDataExtractor'
        ],
        'Zerp\Contract\Events\CreateContract' => [
            'action' => 'New Contract',
            'module' => 'Contract',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\ContractDataExtractor'
        ],
        'Zerp\Hrm\Events\CreateAward' => [
            'action' => 'New Award',
            'module' => 'Hrm',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\HrmAwardDataExtractor'
        ],
        'Zerp\Hrm\Events\CreateAnnouncement' => [
            'action' => 'New Announcement',
            'module' => 'Hrm',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\HrmAnnouncementDataExtractor'
        ],
        'Zerp\Hrm\Events\CreateHoliday' => [
            'action' => 'New Holidays',
            'module' => 'Hrm',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\HrmHolidayDataExtractor'
        ],
        'Zerp\Hrm\Events\CreateEvent' => [
            'action' => 'New Event',
            'module' => 'Hrm',
            'type' => 'company',
            'extractor' => 'Zerp\Webhook\Extractors\HrmEventDataExtractor'
        ],
    ]
];
