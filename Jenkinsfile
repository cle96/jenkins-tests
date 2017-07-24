pipeline {
  agent {
    docker {
      image 'php:latest'
    }
    
  }
  stages {
    stage('InitMessage') {
      steps {
        echo 'InitMessage'
      }
    }
    stage('Build') {
      steps {
        sh 'for f in /*.php; do phpunit $f;done'
      }
    }
  }
}