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
        addcolumn('address', 'text', null, true),
        addcolumn('vacancy', 'string', 100, true),
        addcolumn('type', 'string', 100),
        addcolumn('salary', 'string', 100, true),
        addcolumn('description', 'text', null),
        addcolumn('status', 'string', 100),
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
