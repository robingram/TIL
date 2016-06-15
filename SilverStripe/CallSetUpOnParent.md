# Call `setUp` on parent in tests

When using a `setUp` method in Sapphire tests it is _really_ important to call `parent::setUp()` first thing in the method. Not doing this could cost you a lot of time tracking down seemingly random bugs in your tests.
