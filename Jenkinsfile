pipeline {
    agent any

    environment {
        DEPLOY_DIR = "/var/www/html/wordpress"
        REMOTE_USER = "root"
        REMOTE_HOST = "157.180.75.55"
    }

    stages {
        stage('Clone Repo') {
            steps {
                git credentialsId: 'token-wp', url: 'https://github.com/siva-repocode/wp-scale.git'
            }
        }

        stage('Deploy Code') {
            steps {
                sshagent(credentials: ['wp-id']) {
                    sh '''
                    rsync -av \
                      --exclude='wp-content/uploads' \
                      --exclude='wp-config.php' \
                      -e "ssh -o StrictHostKeyChecking=no" \
                      . ${REMOTE_USER}@${REMOTE_HOST}:${DEPLOY_DIR}/
                    '''
                }
            }
        }
    }
}
