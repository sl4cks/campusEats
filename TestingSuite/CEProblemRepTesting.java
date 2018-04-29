import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

class CEProblemRepTesting {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://ec2-54-210-100-190.compute-1.amazonaws.com/deliveryForm.php");
	}


	@Test
	void problemRepTesting1() {

	}

}
