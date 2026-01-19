### PHPUnit Test
Implement TDD using PHPUnit in raw PHP sample project.

### AAA Pattern in Unit Tests
The Arrange, Act, Assert (AAA) pattern is a standard way to structure unit tests in PHPUnit for clarity and maintainability.

* Arrange: Set up the test data, objects, and any necessary dependencies or mocks.
* Act: Execute the specific method or code under test.
* Assert: Verify that the outcome or result matches the expected behavior. 

### PHPUnit AAA Test Example
Here is a practical example using a simple Calculator class and a corresponding PHPUnit test structured with the AAA pattern.

```php
// tests/CalculatorTest.php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add_method_returns_correct_sum(): void
    {
        // Arrange
        $calculator = new Calculator();
        $expectedResult = 15;
        $inputA = 5;
        $inputB = 10;

        // Act
        $actualResult = $calculator->add($inputA, $inputB);

        // Assert
        $this->assertEquals($expectedResult, $actualResult);
    }
}
```

### Explanation of the Example
* Arrange: In this section, a new instance of the Calculator class is created. We also define the expected result and the input values for the add method.
* Act: The method under test, add(), is called with the prepared input data.
* Assert: The assertEquals() assertion is used to compare the result returned from the act phase ($actualResult) with the $expectedResult defined in the arrange phase. If they are not equal, the test will fail. 
