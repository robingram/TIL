# Hiding classes when creating a new page

If you want to hide a class from the list of options when creating a new page, either in 'Add new' or the right-click menu's 'Add new page here' list then this can be achieved by adding something like the following to a sub-class (or possibly the class itself):

    private static $hide_ancestor = 'BlogPost';
