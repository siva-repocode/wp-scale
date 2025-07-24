pipeline {
    agent any

    environment {
        DEPLOY_DIR = "/var/www/html/wordpress"
        REMOTE_USER = "root"
        REMOTE_HOST = "157.180.75.55"
        SSH_KEY = "/root/.ssh/id_rsa"  // Private key path on Jenkins server
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
                rsync -av \
                    --exclude='wp-content/uploads' \
                    --exclude='wp-config.php' \
                    -e "ssh -i ${SSH_KEY} -o StrictHostKeyChecking=no" \
                    . ${REMOTE_USER}@${REMOTE_HOST}:${DEPLOY_DIR}/
                '''
            }
        }
    }
}
