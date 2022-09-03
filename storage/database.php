<?php
/* Yolk migration
 ********************************************************
 * NOTE: what ever is here is what shows in your database.
 *  if you remove a table or a field  and you  lauch the migration route in your browser,
 * it affect your database.
 * *************************************************************************************.
 * to migrate your database tables , open your websitename/migration.
 */
addtable(
    'job',
    [
        addColumn('id', 'int', 11, false, true, true),
        addColumn('title', 'string', 50),
        addcolumn('company', 'string', 100),
        addcolumn('category', 'string', 100),
        // addcolumn('address', 'text', null, true),
        addcolumn('vacancy', 'string', 100, true),
        addcolumn('type', 'string', 100),
        addcolumn('salary', 'string', 100, true),
        addcolumn('description', 'text', null, true),
        addcolumn('requirement', 'text', null, true),
        addcolumn('qualification', 'text', null, true),
        addcolumn('experience', 'text', null, true),
        addcolumn('deadline', 'date', null, true),
        addcolumn('gender', 'string', 100),
        addcolumn('status', 'string', 100, true),
        addcolumn('dateposted', 'string', 100),
    ]
);

addtable('category', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
]);

addtable('employer', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
    addColumn('email', 'string', 100),
    addColumn('phone', 'string', 100),
    addColumn('address', 'text', null),
    addColumn('logo', 'text', null),
    addColumn('password', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('dateadded', 'string', 100),
]);

addtable('candidate', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
    addColumn('email', 'string', 100),
    addColumn('phone', 'string', 100),
    addColumn('address', 'text', null),
    addColumn('dob', 'string', 100),
    addColumn('gender', 'string', 100),
    addColumn('jobtitle', 'string', 100),
    addColumn('bio', 'text', null),
    addColumn('photo', 'text', null),
    addColumn('cv', 'text', null, true),
    addColumn('password', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('dateadded', 'string', 100),
]);

addtable('education',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('university', 'string', 100),
     addColumn('degree', 'string', 100),
     addColumn('field', 'string', 100),
     addColumn('duration', 'string', 100), ]
);

addtable('skill',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('skill', 'string', 100),
     addColumn('level', 'string', 100),
    ]
);

addTable('experience',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('company', 'string', 100),
     addColumn('position', 'string', 100),
     addColumn('duration', 'string', 100),
     addColumn('description', 'text', null),
    ]
);

addtable('socials',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('facebook', 'string', 100),
     addColumn('twitter', 'string', 100),
     addColumn('linkedin', 'string', 100),
     addColumn('instagram', 'string', 100),
    ]
);

addtable('savedjobs',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('jid', 'string', 100),
    ]
);

addtable('appliedjobs',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('cid', 'string', 100),
     addColumn('jid', 'string', 100),
     addColumn('status', 'string', 100),
     addColumn('dateapplied', 'string', 100), ]
);

addtable('blog',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('title', 'string', 100),
     addColumn('category', 'string', 100),
     addColumn('description', 'text', null),
     addColumn('photo', 'text', null),
     addColumn('status', 'string', 100),
     addColumn('dateposted', 'string', 100),
    ]
);

addtable('blogcategory',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('name', 'string', 100),
    ]
);

addtable('partners',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('name', 'string', 100),
     addColumn('logo', 'text', null),
    ]
);

addtable('contact',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('name', 'string', 100),
     addColumn('email', 'string', 100),
     addColumn('phone', 'string', 100),
     addColumn('subject', 'string', 100),
     addColumn('message', 'text', null),
     addColumn('dateadded', 'string', 100),
    ]
);

addtable('faq',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('question', 'string', 100),
     addColumn('answer', 'text', null),
    ]
);

addtable('terms',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('title', 'string', 100),
     addColumn('description', 'text', null),
    ]
);

addtable('aboutus',
    [
    //  addColumn('id', 'int', 11, false, true, true),
     addColumn('history', 'text', null, true),
     addColumn('vision', 'text', null, true),
     addcolumn('mission', 'text', null, true),
    ]
);

addtable('settings',
    [
     addColumn('sitename', 'string', 100),
     addColumn('logo', 'text', null),
     addColumn('favicon', 'text', null),
     addColumn('email', 'string', 100),
     addColumn('phone', 'string', 100),
     addColumn('address', 'text', null),
     addColumn('about', 'text', null),
     addColumn('facebook', 'text', null),
     addColumn('twitter', 'text', null),
     addColumn('linkedin', 'text', null),
     addColumn('instagram', 'text', null),
     addColumn('youtube', 'text', null),

     addColumn('footer', 'text', null),
     addColumn('dateadded', 'string', 100),
    ]
);

addtable('cmd',
    [
     addColumn('id', 'int', 11, false, true, true),
     addColumn('name', 'string', 100),
     addColumn('email', 'string', 100),
     addColumn('password', 'string', 100),
     addColumn('status', 'string', 100),
     addColumn('dateadded', 'string', 100),
    ]
);
