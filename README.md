<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

Deployment Plan
======

Branching and Merging Notes
------
  * create new local branch
    * $ git branch developmentbranch
  * checking which local branch you're in
    * $ git branch
  * switching branches
    * $ git checkout developmentbranch
    * commit files
      * $ touch file.html
      * $ git add file.html
      * $ git commit -m 'message'
      * $ git push
        * note: git push only works if it finds a branch with a matching name in your repo
  * merging branches
    * switch to master branch
      * $ git checkout master
    * merge
      * $ git merge developmentbranch
      * $ git push
    * delete local branch (optional)
      * $ git branch -d developmentbranch


Alpha Stage
------

 * Create Deployment Plan
 * Set Up File Structure
 * Basic HTML & CSS
  * Demonstrates Navigation
  * Forms (currently non functional)
  * Limited CSS > font & color styling
 * Set Up Member Account User Database
  * Connect to Sign Up Form 
  * Connect to Log In Form
 * QA Testing: Sign Up/Sign In Process
  * Set Up Viewer Account User Database
   * Dashboard Invite Manager
   * Generate Email with Invite Form Link 
 * QA Testing: Send Invites, Sign Up, Log In, Delete


Beta Stage
------
* Finalized HTML & CSS
  * All content and assets present
  * All forms & navigation functional
  * Responsive CSS
* Set up Posts Database
  * Connect to Member Account Dashboard
* QA Testing: Add, Edit, Delete Posts
* Display Posts from Database
  * Set up Permissions linked to Viewer Account Users 
  * CSS > format by post type
* QA Testing: Add Post using Permissions, View from Different User Accounts



Site Launch
------
* Final QA Testing
* Launch Site
* Handoff Packet
  * All Documents & Assets
  * Details about Post Launch Support
* Postmortem
