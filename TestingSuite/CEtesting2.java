import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;


import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

class CEtesting2 {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://campuseats.s3-website-us-east-1.amazonaws.com/index.html");
	}
	
	@Test
	void loginTest1() throws InterruptedException {
		WebElement login = driver.findElement(By.linkText("Login"));
		Thread.sleep(1000);
		login.click();
		WebElement dummyAcc = driver.findElement(By.id("masonNetID"));
		dummyAcc.sendKeys("Hsingh20");
		Thread.sleep(1000);
		dummyAcc = driver.findElement(By.id("enterPassword"));
		dummyAcc.sendKeys("PASSWORD1!@");
		Thread.sleep(1000);
	}
	
	

}
