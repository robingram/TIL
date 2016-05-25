# Friendly class name

If you want to use something other than the automatically generated name of the class (i.e. split on capital letters) set the `private static $singular_name` variable.

For example, to display:

    class ArticlePageBlogStyleDefault extends ArticleBlogPage

As something other than "Article Page Blog Style Default" do something like:

    private static $singular_name = 'Article - Default';
