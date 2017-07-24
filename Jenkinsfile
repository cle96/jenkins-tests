pipeline {
  agent none
  stages {
    stage('Validation') {
      steps {
        sh 'phpunit --log-junit results/phpunit/phpunit.xml -c phpunit.xml'
      }
    }
  }
}