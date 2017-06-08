Dependency Injection

The example code from the book does not working successfully. By debugging I found a $this included in the global $this->component, and $this is recursive.

I rewrite to static and get rid of closure make it working. However, I guess I removed the whole point. Wondering how to make it working, maybe later after continue studying will come back. 