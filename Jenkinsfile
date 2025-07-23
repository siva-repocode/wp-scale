pipeline {
    agent any

    environment {
        DEPLOY_DIR = "/var/www/html/wordpress"
    }

    stages {
        stage('Clone Repo') {
            steps {
                git credentialsId: 'token-wp', url: 'https://github.com/siva-repocode/wp-scale.git'
            }
        }

        stage('Deploy Code') {
            steps {
                sh '''
                rsync -av --exclude='wp-content/uploads' --exclude='wp-config.php' . ${DEPLOY_DIR}/
                '''
            }
        }
    }
}
